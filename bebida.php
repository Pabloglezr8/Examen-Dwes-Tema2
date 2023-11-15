<?php 

class Bebida extends Articulo{
    private $alcoholica;

    public function __construct($nombre, $coste, $precio, $contador, $alcoholica){
        parent::__construct($nombre, $coste, $precio, $contador);
        $this->alcoholica=$alcoholica;
    }

    public function getAlcoholica(){
        return $this->alcoholica;
    }

    public function setAlcoholica($alcoholica){
        $this->alcoholica=$alcoholica;
    }

    public function __toString(){
        return parent::__toString();
    }
}