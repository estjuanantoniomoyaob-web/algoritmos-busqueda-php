<?php

// EJEMPLO 2: ARREGLO BIDIMENSIONAL

$matriz = [
    [10, 20, 30],
    [40, 50, 60],
    [70, 80, 90]
];

$buscar = 60;

$encontrado = false;

echo "Matriz:\n";

for ($fila = 0; $fila < count($matriz); $fila++) {

    for ($columna = 0; $columna < count($matriz[$fila]); $columna++) {

        echo $matriz[$fila][$columna] . " ";
    }

    echo "\n";
}

echo "\nBuscando el número: $buscar\n\n";

// Búsqueda
for ($fila = 0; $fila < count($matriz); $fila++) {

    for ($columna = 0; $columna < count($matriz[$fila]); $columna++) {

        if ($matriz[$fila][$columna] == $buscar) {

            echo "Elemento encontrado: $buscar\n";
            echo "Fila: $fila\n";
            echo "Columna: $columna\n";

            $encontrado = true;
            break 2;
        }
    }
}

if (!$encontrado) {
    echo "Elemento no encontrado\n";
}

?>
