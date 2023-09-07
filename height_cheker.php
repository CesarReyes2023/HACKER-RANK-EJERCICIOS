<?php

class Solution {
    public function heightChecker($heights) {
        // Copia el arreglo original $heights en $expected.
        $expected = $heights;

        // Ordena $expected para obtener las alturas esperadas.
        sort($expected);

        // Compara $heights con $expected y cuenta las discrepancias.
        return count(array_diff_assoc($heights, $expected));
    }
}

// Crear una instancia de la clase Solution.
$solution = new Solution();

// Ejemplos de alturas.
$heights1 = [1, 1, 4, 2, 1, 3];
$heights2 = [5, 1, 2, 3, 4];
$heights3 = [1, 2, 3, 4, 5];
$heights4 = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15];

// Calcular y mostrar los resultados.
echo "Resultado 1 (heightChecker): " . $solution->heightChecker($heights1) . "\n";
echo "Resultado 2 (heightChecker): " . $solution->heightChecker($heights2) . "\n";
echo "Resultado 3 (heightChecker): " . $solution->heightChecker($heights3) . "\n";
echo "Resultado 4 (heightChecker): " . $solution->heightChecker($heights4) . "\n";

?>