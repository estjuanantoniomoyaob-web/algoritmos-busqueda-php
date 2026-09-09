<?php

// EJEMPLO 2: ARREGLO BIDIMENSIONAL

$matriz = [
    [10, 20, 30],
    [40, 50, 60],
    [70, 80, 90]
];

echo "Matriz:\n";

for ($fila = 1; $fila < count($matriz); $fila++) {

    for ($columna = 1; $columna < count($matriz[$fila]); $columna++) {
        echo $matriz[$fila][$columna] . " ";
    }

    echo "\n";
}

$buscar = readline("Ingrese el número que desea buscar: ");

$encontrado = false;

for ($fila = 1; $fila < count($matriz); $fila++) {

    for ($columna = 1; $columna < count($matriz[$fila]); $columna++) {

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
    echo "El elemento $buscar no se encuentra en la matriz.\n";
}

?>
