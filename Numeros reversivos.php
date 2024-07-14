<?php
// Crear un arreglo del 1 al 10
$array1 = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

// Imprimir el arreglo original
echo "Arreglo original: \n";
print_r($array1);

// Invertir el arreglo manualmente
$array2 = [];
$length = count($array1);

for ($i = $length - 1; $i >= 0; $i--) {
    $array2[] = $array1[$i];
}

// Imprimir el arreglo invertido
echo "Arreglo invertido: \n";
print_r($array2);
?>
