<?php

$number = $_POST["valor"];
$valormulta = 4 * ($number - 50);
if($number > 50){
    echo "Multa: ", $valormulta , "R$";
}
else{
    echo "Sem multa";
}

?>