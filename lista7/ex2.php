<?php

function analisarVenda($produto, $custo, $venda){
    $lucro = $venda - $custo;

    if($lucro <= 0){
        $mensagem = "Prejuizo!!!";
    }
    elseif($lucro <= 20){
        $mensagem = "Lucro baixo, mas vale a pena";
    }
    else{
        $mensagem = "lucro alto! investe";
    }
    echo "produto: , $produto <br>";
    echo "lucro: , $lucro <br>";
    echo "analise: , $mensagem <br>";
}
analisarVenda("Camiseta", 40, 35);