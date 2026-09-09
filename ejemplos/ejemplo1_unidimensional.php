<?php

// EJEMPLO 1: ARREGLO UNIDIMENSIONAL

$numeros = [10, 20, 30, 40, 50];

$buscar = 30;

$encontrado = false;

echo "Arreglo: ";
print_r($numeros);

echo "Buscando el número: $buscar\n\n";

// Búsqueda lineal
for ($i = 0; $i < count($numeros); $i++) {

    if ($numeros[$i] == $buscar) {

        echo "Elemento encontrado: $buscar\n";
        echo "Posición: $i\n";

        $encontrado = true;
        break;
    }
}

if (!$encontrado) {
    echo "Elemento no encontrado\n";
}

?>
