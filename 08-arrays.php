<?php include 'includes/header.php';

$carrito = ['Tablet','TV', 'Computadora'];

//etiqueta para revisar los datos de un arreglo


//Ver datos en la posición
echo $carrito[0];

$carrito [3] = "Nuevo elementossssss...";
echo "<pre>";
var_dump($carrito);
echo "</pre>";


include 'includes/footer.php';