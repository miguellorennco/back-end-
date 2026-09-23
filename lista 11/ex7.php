<?php

$email = $_POST['email'];
$senha = $_POST['senha'];

if($email == "jpaulo@sp.senai.br"
    && $senha == "jp12345"){
    echo "Login, bem sucedido!!!";
}else{
    echo "Login ou senha invalido!!!";
}
?>