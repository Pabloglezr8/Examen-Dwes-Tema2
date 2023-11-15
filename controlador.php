<?php 
require ('articulo.php');
require ('pizza.php');
require ('bebida.php');

$articulos = [
    new Articulo("Lasagna", 3.50, 7.00, 20),
    new Articulo("Pan de ajo y mozzarella", 2.00, 4.50, 15),
    new Pizza("Pizza Margarita", 4.00, 8.00, 30, ["Tomate", "Mozzarella", "Albahaca"]),
    new Pizza("Pizza Pepperoni", 5.00, 10.00, 25, ["Tomate", "Mozzarella", "Pepperoni"]),
    new Pizza("Pizza Vegetal", 4.50, 9.00, 18, ["Tomate", "Mozzarella", "Verduras Variadas"]),
    new Pizza("Pizza 4 quesos", 5.50, 11.00, 20, ["Mozzarella", "Gorgonzola", "Parmesano", "Fontina"]),
    new Bebida("Refresco", 1.00, 2.00, 50, false),
    new Bebida("Cerveza", 1.50, 3.00, 40, true)
];

$pizzas = array_filter($articulos, function ($articulo) {
    return $articulo instanceof Pizza;
});

$bebidas = array_filter($articulos, function ($articulo) {
    return $articulo instanceof Bebida;
});

$otros = array_filter($articulos, function ($articulo) {
    return $articulo instanceof Articulo;
});

$otros = array_filter($articulos, function ($articulo) {
    return $articulo instanceof Articulo && !(($articulo instanceof Pizza) || ($articulo instanceof Bebida));
});

    function mostrarMasVendidos($articulos) {
        $vendidos = [];
        foreach ($articulos as $articulo) {
            $vendidos[$articulo->getNombre()] = $articulo->getContador();    
        }        
        arsort($vendidos);
        $tresMasVendidos = array_slice($vendidos,0,3);
        echo "<h1>Los más vendidos</h1>";
        echo "<ul>";
        foreach ($tresMasVendidos as $nombre => $ventas) {
            echo "<li>$nombre - Vendidos $ventas</li>";
        }
       echo "</ul>";  
    }



include ('vista.php');