<?php

$number = $_POST["num"];
$number2 = $_POST["num2"];
$number3 = $_POST["num3"];
$media = ($number + $number2 + $number3) / 3;

if($media >=6){
    echo "Aprovado";
}else{
    echo "Reprovado";
}
?>

