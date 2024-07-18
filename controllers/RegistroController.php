<?php

namespace Controllers;

use MVC\Router;

class RegistroController {
    public static function registro(Router $router){
        echo "";
   

    $router->render('auth/registro', [
        'titulo' => 'Registro'
    ]);

   } 

  

   public static function crear(){
     if($_SERVER['REQUEST_METHOD'] === 'POST'){

     }
   }
}