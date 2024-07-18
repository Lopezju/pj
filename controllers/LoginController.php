<?php

namespace Controllers;

use Classes\Email;
use MVC\Router;
use Model\Usuario;


class LoginController{
    public static function login(Router $router){
       $alertas = [];

        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            $usuario = new Usuario($_POST);

            $alertas = $usuario->validarLogin();

            if(empty($alertas)) {
                //Comprobar si el usuario existe
                $usuario = Usuario::where('email', $usuario->email);

                if(!$usuario || !$usuario->confirmado){
                    Usuario::setAlerta('error', 'El usuario no existe o no esta confirmado');
                }else{
                    if(password_verify($_POST['password'], $usuario->password)){
                       session_start();
                       $_SESSION['id'] = $usuario->id;
                       $_SESSION['nombre'] = $usuario->nombre;
                       $_SESSION['email'] = $usuario->email;
                       $_SESSION['login'] = true;
                       header('Location: admin/dashboard');
                       
                    }else{
                        Usuario::setAlerta('error', 'Password Incorrecto');
                    }
                }
            }
        }
        $alertas = Usuario::getAlertas();

        $router->render('auth/login', [
             'titulo' => 'Iniciar Sesión',
             'alertas' => $alertas
        ]);
    }

    public static function logout(){
        echo "Desde Logout";

        
    }

    public static function crear(Router $router){
      $alertas = [];  
      $usuario = new Usuario;

        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            $usuario->sincronizar($_POST);
            $alertas = $usuario->validarNuevaCuenta();

           if(empty($alertas)){
            $existeUsuario = Usuario::where('email', $usuario->email);

            if($existeUsuario){
                Usuario::setAlerta('error','El usuario ya esta registrado');
                $alertas = Usuario::getAlertas();
            }else{
                $usuario->hashPassword();

                // Eliminar password2
                unset($usuario->password2);

                // crear token
                $usuario->crearToken();

                // crear un nuevo usuario
                $resultado = $usuario->guardar();

                //enviar email
                $email = new Email($usuario->nombre, $usuario->email, $usuario->token);
                $email->enviarConfirmacion();
                

                if($resultado) {
                    header('Location: /mensaje');
                }

            }
           }
        }

        $router->render('auth/crear', [
            'titulo' => 'Crear Cuenta',
            'usuario' => $usuario,
            'alertas' => $alertas
       ]);
    }

    public static function olvide(){
        echo "Desde olvide";

        if($_SERVER['REQUEST_METHOD'] === 'POST'){
   
        }
    }

    public static function reestablecer(){
        echo "Desde reestablecer";

        if($_SERVER['REQUEST_METHOD'] === 'POST'){
   
        }
    }
    public static function mensaje(Router $router){
        if($_SERVER['REQUEST_METHOD'] === 'POST'){
   
        }

        $router->render('auth/mensaje', [
             'titulo' => 'Mensaje'
        ]);

        
    }

    public static function confirmar(Router $router){
       $token = s($_GET['token']);
       
       if(!$token) header('Location: /');

       // Encontrar el usuario con este token
       $usuario = Usuario::where('token', $token);

       if(empty($usuario)) {
         Usuario::setAlerta('error', 'Token No valido');
       }else{
         //confirmar cuenta
          $usuario->confirmado = 1;
          unset($usuario->password2);
          
          $usuario->guardar();

          Usuario::setAlerta('exito', 'Cuenta Comprobada Correctamente');
       }

       $alertas = Usuario::getAlertas();

        $router->render('auth/confirmar', [
             'titulo' => 'Confirmar Cuenta',
             'alertas' => $alertas
        ]);

        
    }
}
