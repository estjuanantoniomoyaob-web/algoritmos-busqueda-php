<?php

// EJEMPLO 2: ARREGLO BIDIMENSIONAL

$matriz = [
    [10, 20, 30],
    [40, 50, 60],
    [70, 80, 90]
];

echo "Matriz:\n";

for ($fila = 0; $fila < count($matriz); $fila++) {

    for ($columna = 0; $columna < count($matriz[$fila]); $columna++) {
        echo $matriz[$fila][$columna] . " ";
    }

    echo "\n";
}

$buscar = readline("\nIngrese el número que desea buscar: ");

$encontrado = false;

for ($fila = 0; $fila < count($matriz); $fila++) {

    for ($columna = 0; $columna < count($matriz[$fila]); $columna++) {

        if ($matriz[$fila][$columna] == $buscar) {

            echo "\nElemento encontrado: $buscar\n";
            echo "Fila: " . ($fila + 1) . "\n";
            echo "Columna: " . ($columna + 1) . "\n";

            $encontrado = true;
            break 2;
        }
    }
}

if (!$encontrado) {
    echo "\nEl elemento $buscar no se encuentra en la matriz.\n";
}

?>
