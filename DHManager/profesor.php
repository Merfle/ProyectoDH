<?php
    class Profesor {
        public $nombre;
        public $apellido;
        public $antiguedad;
        public $codigo;

        public function __construct($nombre, $apellido, $antiguedad, $codigo){
        $this->nombre=$nombre;
        $this->apellido=$apellido;
        $this->antiguedad=$antiguedad;
        $this->codigo=$codigo;

        }
        public function getNombre(){
          return $this->nombre;
        }
        public function setNombre($nombre){
          $this->nombre = $nombre;

        }
        public function getApellido(){
          return $this->apellido;
        }
        public function setApellido($apellido){
          $this->apellido = $apellido;
        }
        public function getAntiguedad(){
          return $this->antiguedad;
        }
        public function setAntiguedad($antiguedad){
          $this->antiguedad = $antiguedad;
        }
        public function getCodigo(){
          return $this->codigo;
        }
        public function setCodigo($codigo){
          $this->codigo = $codigo;
        }


    }

    $profesor1 = New Profesor("José", "Gonzáles", 5, 234);



?>
