<?php

echo ("Hola world");
echo"<br><br>";

#variable numerica
$numero = 5;
echo ("Esto es una variable Numero: $numero<br>");
var_dump($numero); 
echo "<br><br>";

#palabra texto
$palabra = ("palabra");   
echo("esto es una variable texto: $palabra<br>");
var_dump($palabra);
echo "<br><br>";

#Variable boleana
$boleana = true;
echo("esto es una variable boleana: $boleana<br>");
var_dump($boleana); 
echo "<br><br>";

#Variable de Arreglo
$colores = array("rojo", "amarillo");
echo "Esto es una variable array: $colores[1]<br>";
var_dump($colores); 
echo "<br><br>";

#Variable de Arreglo con objetos
$verduras = array("verdura1"=>"lechuga", "verdura2"=>"cebolla");
echo "Esto es una variable array con objetos: $verduras[verdura1]<br>";
var_dump($verduras); 
echo "<br><br>";

#Variable de tipo objeto
$frutas = (object)["fruta1"=>"pera", "fruta2"=>"manzana"];
echo "Esto es una variable de tipo objeto: $frutas->fruta1<br>";
var_dump($frutas);
echo "<br><br>";


?>
