<?php

function calculardesconto($preco, $desconto){
    $valordesconto = $preco * $desconto / 100;
    return $preco - $valordesconto;

}
echo "preco final: R$ ", calculardesconto(100, 10);
?>