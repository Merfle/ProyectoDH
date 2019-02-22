<?php

require 'profesor.php';

  class Adjunto extends Profesor {
    public $consultas;


  public function __construct($consultas){
    $this->consultas = $consultas;
  }

  public function getconsultas(){
    return $this->consultas;
  }
  public function setconsultas($consultas){
    $this->consultas = $consultas;
  }


}


?>
