<?php
    class  Alumno {
        public $nombre;
        public $apellido;
        public $codigo;

        public function __construct($nombre, $apellido, $codigo){
        $this->nombre=$nombre;
        $this->apellido=$apellido;
        $this->codigo=$codigo;

        }
        public function getNombre(){
          return $this->nombre;
        }
        public function setNombre($nombre){
          $this->nombre($nombre);

        }
        public function getApellido(){
          return $this->apellido;
        }
        public function setApellido($apellido){
          $this->apellido($apellido);
        }
        public function getCodigo(){
          return $this->codigo;
        }
        public function setCodigo($codigo){
          $this->codigo($codigo);
        }


    }



?>
