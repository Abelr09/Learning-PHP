<?php
//Condiciones
$a = 5;
$b = 10;
if ($a > $b) {
    echo "a es mayor a b";
}
elseif ($a == $b){
    echo "a es igual a b";
}
else{
    echo "a es menor que b<br>";
    echo "<br>";
}

//Suiches
$dia = "sabado";
switch($dia){
    case 'sabado':
        echo "voy a estudiar php";
        break;

    case 'viernes':
        echo "voy a la fiesta";
        break;
    
    case 'domingo':
        echo "voy a descansar";
        break;

    default: echo "voy a la universidad";
}
echo "<br><br>";
//Ciclo While
$n = 1;
while ($n <= 5) {
    echo $n;
    $n++;
}
echo "<br><br>";

//Ciclo Do While
$p = 1;
do {
    echo $p;
    $p++;
} while ($p <= 5);
echo "<br><br>";
//Ciclo For
for($i = 0; $i <= 5; $i++){
    echo $i;
}
?>