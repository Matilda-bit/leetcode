<?php

class Solution {

    /**
     * @param Integer[][] $matrix
     * @return NULL
     */
    function rotate(&$matrix) {
        $n = count($matrix);

        // Transpose the matrix
        for ($i = 0; $i < $n; $i++) {
            for ($j = $i + 1; $j < $n; $j++) {
                // Swap elements across the main diagonal
                $temp = $matrix[$i][$j];
                $matrix[$i][$j] = $matrix[$j][$i];
                $matrix[$j][$i] = $temp;
            }
        }

        // Reverse each row to get the final result
        for ($i = 0; $i < $n; $i++) {
            $matrix[$i] = array_reverse($matrix[$i]);
        }

        return $matrix;
    }
}

?>