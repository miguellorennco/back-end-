<?php

echo "Menu da Casa da Pizza Bar, digite o número e fale a opção: <br> 1. Pizza <br> 2.Hambúrguer <br>  3. Refrigerante <br> 4. Sobremesa <br> 5. Saída <br>";
echo "<br>";
$opcao = 1;

switch($opcao){
    case 1:
       echo " 1 - Pizza Calabresa <br> 2 - Pizza Mussarela <br> 3 - Pizza Portuguesa <br> 4 - Pizza Strogonoff";
       $pizza = 1;
       break;
    case 2:
        echo "- X-Salada Especial <br> - X-Bacon <br> - X-Egg ";
        $Hamburguer = 2;
        break;
    case 3:
        echo "- Pepsi <br> - Coca-Cola <br> - Sprite <br>";
        $Refrigerante= 3;
        break;
    case 4:
        echo "- Sorvete Flocos <br> - Churros <br> - Petit Gateau";
        $Sobremesa = 4;
        break;
    case 5:
        echo "Saída";
        $Saida = 5;
        break; 
    default:
        echo "Opção Invalida";
        break;
       
}
?>
