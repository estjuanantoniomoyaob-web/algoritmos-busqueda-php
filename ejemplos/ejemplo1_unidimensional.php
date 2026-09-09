<?php

// EJEMPLO 1: ARREGLO UNIDIMENSIONAL

$numeros = [10, 20, 30, 40, 50];

echo "Arreglo: ";
print_r($numeros);

$buscar = readline("Ingrese el número que desea buscar: ");

$encontrado = false;

for ($i = 0; $i < count($numeros); $i++) {

    if ($numeros[$i] == $buscar) {
        echo "Elemento encontrado: $buscar\n";
        echo "Posición: $i\n";
        $encontrado = true;
        break;
    }
}

if (!$encontrado) {
    echo "El elemento $buscar no se encuentra en el arreglo.\n";
}

?>
