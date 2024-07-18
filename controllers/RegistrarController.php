<?php

namespace Controllers;

use Model\Registro;

class RegistrarController {
    public static function index(){
        if($_SERVER['REQUEST_METHOD'] === 'POST'){
   
        }
      }
  

   public static function crear(){
     if($_SERVER['REQUEST_METHOD'] === 'POST'){
            $registro = new Registro($_POST);
            $resultado = $registro->guardar();
            echo json_encode($resultado);
     }
   }
}