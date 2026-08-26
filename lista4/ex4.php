<?php

$email = "seuemail@gmail.com";
$senha = "suasenhai123";
$ativo = true;
echo "Login - Facebook <br>";

if($email == "seuemail@gmail.com" &&
    $senha == "suasenhai123" && $ativo == true){
        echo "login autorizado...";
    }
else{
    echo "usuarios ou senha invalidos";
}
?>