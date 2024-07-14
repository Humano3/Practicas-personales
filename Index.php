<?php
// Crear un arreglo del 1 al 10
$array1 = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

// Invertir el arreglo manualmente
$array2 = [];
$length = count($array1);

for ($i = $length - 1; $i >= 0; $i--) {
    $array2[] = $array1[$i];
}

// Mostrar los números en orden
echo "Números en orden: ";
foreach ($array1 as $number) {
    echo $number . " ";
}
echo "\n";

// Mostrar los números invertidos
echo "Números invertidos: ";
foreach ($array2 as $number) {
    echo $number . " ";
}
echo "\n";
?>
