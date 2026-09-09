<?php
// Cosseno de 0° é 1, logo acos(1) deve ser 0 radianos (0°)
echo acos(1) . "\n"; // Saída: 0

// Cosseno de 90° é 0, logo acos(0) deve ser aprox. 1.57 radianos (π/2)
echo acos(0) . "\n"; // Saída: 1.5707963267949

// Cosseno de 180° é -1, logo acos(-1) deve ser aprox. 3.14 radianos (π)
echo acos(-1) . "\n"; // Saída: 3.1415926535898

// Passar um valor fora do intervalo [-1, 1] resulta em NAN
var_dump(acos(1.5)); // Saída: float(NAN)
?>

//A função acos() no PHP serve para calcular o arco cosseno de um número. 