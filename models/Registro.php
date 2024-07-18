<?php

namespace Model;

class Registro extends ActiveRecord {
    protected static $tabla = 'registro';
    protected static $columnasDB = ['id', 'nombre', 'edad', 'parroquia', 'vicaria', 'telefono', 'talla', 'usarias', 'ruta','enfermedad', 'medicamento','emergencia','llama'];
    
    

    public function __construct($args = [])
    {
        $this->id = $args['id'] ?? null;
        $this->nombre = $args['nombre'] ?? '';
        $this->edad = $args['edad'] ?? 0;
        $this->parroquia = $args['parroquia'] ?? '';
        $this->vicaria = $args['vicaria'] ?? '';
        $this->telefono = $args['telefono'] ?? '';
        $this->talla= $args['talla'] ?? '';
        $this->usarias = $args['usarias'] ?? '';
        $this->ruta= $args['ruta'] ?? '';
        $this->enfermedad = $args['enfermedad'] ?? '';
        $this->medicamento = $args['medicamento'] ?? '';
        $this->emergencia = $args['contacto'] ?? 0;
        $this->llama = $args['llama'] ?? '';
    }
}