<?php include 'includes/header.php';

$nombreCliente = "Sebastian Riascos";

//Conocer Extensión de String
echo strlen($nombreCliente);

echo "<br>";


//Eliminar espacios en blanco
$texto = trim($nombreCliente);
echo strlen($texto);

echo "<br>";

//Convertir a Mayusculas
echo strtoupper ($nombreCliente);

echo "<br>";

//Convertir a Minusculas
echo strtolower ($nombreCliente);

//Validación correo
echo "<br>";
$mail1 = "correo@correo.com";
$mail2 = "Correo@correo.com";
var_dump(strtolower($mail1) === strtolower($mail2));

//Reemplazo de letras
echo "<br>";
echo str_replace('Sebastian', 'S', $nombreCliente);

//Revisar si un string existe
echo "<br>";
echo strpos($nombreCliente, 'Sebastian');
$tipoCliente = "Premium";
echo "<br>";

echo "El cliente " . $nombreCliente . " es " . $tipoCliente;
echo "<br>";
//concatenación en JavaScript
echo "El cliente {$nombreCliente} es {$tipoCliente}";

include 'includes/footer.php';