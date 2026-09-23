<?php

$nome = $_POST['nome'];
$idade = $_POST['idade'];
$servico = $_POST['servico'];

echo "Cliente: $nome <br><br>";

if ($servico == "Corte") {
    echo "O valor do serviço é R$ 30,00";
} elseif ($servico == "Barba") {
    echo "O valor do serviço é R$ 20,00";
} elseif ($servico == "Corte + Barba") {
    echo "O valor do serviço é R$ 45,00";
} else {
    echo "Serviço não encontrado.";
}

?>