<?php
    class Curso {
        public $nombre;
        public $codigo;
        public $cantidadalumnos;
        public $titular;
        public $adjunto;

        public function __construct($nombre, $codigo, $cantidadalumnos, $titular, $adjunto){
        $this->nombre=$nombre;
        $this->codigo=$codigo;
        $this->cantidadalumnos;
        $this->titular;
        $this->$adjunto;

        }
        public function getNombre(){
          return $this->nombre;
        }
        public function setNombre($nombre){
          $this->nombre = $nombre;
        }
        public function getCodigo(){
          return $this->codigo;
        }
        public function setCodigo($codigo){
          $this->codigo = $codigo;
        }
        public function getCantidadalumnos(){
          return $this->cantidadalumnos;
        }
        public function setCantidadalumnos($cantidadalumnos){
          $this->cantidadalumnos = $cantidadalumnos;
        }


    }



?>
