<?php
$idade = 27;
$deficiencia = true;
$gestante= false;
if($idade >=60 || $deficiencia == true || $gestante == true){
    echo "Atendimento prioritário";
}
else{
    echo "Atendimento normal";
}
?>

