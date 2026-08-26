<?php

$peso = 55;
$altura = 1.58;

if ($peso / ($altura * $altura) < 18.5){
    echo ("Abaixo do peso");
}
else if($peso / ($altura * $altura) >= 18.5 && $peso / ($altura * $altura) <=24.9){
    echo ("Peso normal");
}
else if($peso / ($altura * $altura) >= 25 && $peso / ($altura * $altura) <=29.9){
    echo ("Sobrepeso");
}
else if($peso / ($altura * $altura) >= 30 && $peso / ($altura * $altura) <=34.9){
    echo ("Obesidade nível 1");
}
else if($peso / ($altura * $altura) >= 35 && $peso / ($altura * $altura) <=39.9){
    echo ("Obesidade nível 2");
}
else{
    echo ("Obesidade nível 3");
}

echo "<br> IMC: ", $peso / ($altura * $altura);
?>