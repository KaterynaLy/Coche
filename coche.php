<?php

include 'tipoComustible.php';

class Coche {
    
public $cilindrada;
public $marca;
public $matricula;
public $color;
public Comustible $tipoComustible;

    function __construct($cilindrada, $marca, $matricula, $color, Comustible $tipoComustible){

        $this->cilindrada=$cilindrada;
        $this->marca=$marca;
        $this->matricula=$matricula;
        $this->color=$color;
        $this->tipoComustible=$tipoComustible;
    }

    function toString() {
        
        echo "Este coche es de: " .$this->cilindrada . " cilindros " .PHP_EOL;
        echo "--de marca: " .$this->marca . PHP_EOL;
        echo "--de matricula: " .$this->matricula . PHP_EOL;
        echo "--tiene color: " . $this->color . PHP_EOL;
        //echo "con comustible: " . $this->tipoComustible . PHP_EOL;
    }

    function getCilindrada(){
        return $this->cilindrada;
    }
    function getMatricula(){
        return $this->matricula;
    }
    function setMatricula($matricula){
        $this->matricula = $matricula;
    }

    function getMarca(){
        return $this->marca;
    }

    function getComustible(){
        return $this->tipoComustible;
    }

}