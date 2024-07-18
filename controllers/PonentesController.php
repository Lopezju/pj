<?php 


namespace Controllers;
use Model\Ponente;
use MVC\Router;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;


class PonentesController{
    public static function index (Router $router){

        $router->render('admin/ponentes/index',[
            'titulo' => 'Ponentes / Conferencistas',
             //'alertas' => $alertas
        ]);

    }

    public static function crear (Router $router){
        $alertas =[];
        $ponente = new Ponente();
        
        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            $ponente->sincronizar($_POST);
 
            //Ver si la imagen esta presente
            if(!empty($_FILES['imagen']['tmp_name'])){
              $carpeta_imagenes = '../public/img/speakers';
                // debuguear($carpeta_imagenes);
 
                if(!is_dir($carpeta_imagenes)){
                    mkdir($carpeta_imagenes, 0755, true);
                }
 
                //creando el nuevo nombre para la nueva foto
                $hashImagen = md5( uniqid( rand(), true) ); 
                $nombreImagen = lcfirst(str_replace(' ', '', ucwords($ponente->nombre)));                    
                $nombreImagen = "{$nombreImagen}_{$hashImagen}";        
                        
                $_POST['imagen'] = $nombreImagen;
            }
           
            $_POST['redes'] = json_encode($_POST['redes'], JSON_UNESCAPED_SLASHES);
            
            $ponente->sincronizar($_POST);
 
            //validar
            $alertas = $ponente->validar();
 
            if(empty($alertas)){
                //Guardar         
 
                //Guardar las imagenes en el servidor
                $manager = new ImageManager(Driver::class);            
                $tmpFile = $_FILES['imagen']['tmp_name'];                
                $image = $manager->read($tmpFile);                
               
                    
                $image->toAvif(60)->save($carpeta_imagenes . "/" . $ponente->imagen . '.avif');
                $image->toWebp(70)->save($carpeta_imagenes  . "/" . $ponente->imagen . '.webp');
 
                $resultado = $ponente->guardar();
 
                if($resultado){
                    header('Location: /admin/ponentes');
                }
 
            }    
        }
 
        $router->render('admin/ponentes/crear',[
            'titulo' => 'Registrar Ponente',
            'alertas' => $alertas,
            'ponente' => $ponente
        ]);
    
      
 }
}
