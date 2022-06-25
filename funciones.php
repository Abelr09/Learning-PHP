<?php
// Funciones sin parametros 
function saludo(){
    echo "Hola<br>";
}
saludo();

// Funciones con parametros 
function despedida($adios){
    echo $adios."<br>";
}
despedida("Adios");

//Funciones con retorno
function retorno($retorno){
    return $retorno;
}
echo retorno("Retornar");
?>