<?php

  require 'profesor.php';

  class Titular extends Profesor {
    public $especialidad;


  public function __construct( $especialidad, $nombre, $apellido, $antiguedad, $codigo){
    parent::__construct($nombre, $apellido, $antiguedad, $codigo);
    $this->especialidad = $especialidad;
  }

  public function getEspecialidad(){
    return $this->especialidad;
  }
  public function setEspecialidad($especialidad){
    $this->especialidad = $especialidad;
  }


}
$titular = new Titular("espe", "nomb", "ape", 1, 123);
var_dump($titular);

?>
