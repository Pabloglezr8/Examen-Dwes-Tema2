<?php

class Pizza extends Articulo {
    private $ingrediente;

    public function __construct($nombre, $coste, $precio, $contador, $ingrediente) {
        parent::__construct($nombre, $coste, $precio, $contador);
        $this->ingrediente = $ingrediente;
    }

    public function getIngrediente() {
        return $this->ingrediente;
    }

    public function setIngrediente($ingrediente) {
        $this->ingrediente = $ingrediente;
    }

    public function __toString() {
        return parent::__toString();
    }

}