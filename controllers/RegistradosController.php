<?php 


namespace Controllers;
use MVC\Router;
use Classes\Paginacion;
use Model\Registro;

class RegistradosController{
    public static function index(Router $router) {
        $pagina_actual = $_GET['page'];
        $pagina_actual = filter_var($pagina_actual, FILTER_VALIDATE_INT);

        if(!$pagina_actual || $pagina_actual < 1) {
            header('Location: /admin/registrados?page=1');
        }
        $registros_por_pagina = 10;
        $total = Registro::total();
        $paginacion = new Paginacion($pagina_actual, $registros_por_pagina, $total);
    

        if($paginacion->total_paginas() < $pagina_actual) {
            header('Location: /admin/registrados?page=1');
        } 
        
        

        $registro = Registro::paginar($registros_por_pagina, $paginacion->offset());
        //debuguear($registro);
        //foreach($registro as $registros) {
           // $registros = Registro::all();
            
            
        //}


        $router->render('admin/registrados/index', [
            'titulo' => 'Usuarios Registrados',
            'registros' => $registro,
            'paginacion' => $paginacion->paginacion()
            
        ]);
    }
}