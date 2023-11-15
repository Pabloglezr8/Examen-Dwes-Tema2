<?php 

class Articulo {
    private $nombre;
    private $coste;
    private $precio;
    private $contador;

    public function __construct($nombre, $coste, $precio, $contador){
        $this -> nombre = $nombre;
        $this -> precio = $precio;
        $this -> coste = $coste;
        $this -> precio = $precio;
        $this -> contador = $contador;
    }

    public function getNombre(){
        return $this -> precio;
    }

    public function setNombre( $nombre){
        $this -> nombre = $nombre;
    }

    public function getCoste(){
        return $this -> coste;
    }

    public function setCote( $cote){
        $this -> cote = $cote;
    }

    public function getPrecio(){
        return $this -> precio;
    }

    public function setPrecio( $precio){
        $this -> precio = $precio;
    }

    public function getContador(){
        return $this -> contador;
    }

    public function setContador( $contador){
        $this -> contador = $contador;
    }

    


    public function __toString(){
        return "{$this->nombre}";
    }

}