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
?>