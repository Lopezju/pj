<?php

namespace Controllers;

use MVC\Router;

class PortadaController {
    public static function portada(Router $router){
        echo "";
   

    $router->render('auth/portada', [
        'titulo' => 'Portada'
    ]);

   } 
}