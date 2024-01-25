<?php

class Solution {

    /**
     * @param Integer[][] $matrix
     * @return NULL
     */
    function setZeroes(&$matrix) {

            $m = count($matrix);
    $n = count($matrix[0]);
    
    $firstRowZero = false;
    $firstColZero = false;

    // Check if the first row should be zeroed
    for ($j = 0; $j < $n; $j++) {
        if ($matrix[0][$j] == 0) {
            $firstRowZero = true;
            break;
        }
    }

    // Check if the first column should be zeroed
    for ($i = 0; $i < $m; $i++) {
        if ($matrix[$i][0] == 0) {
            $firstColZero = true;
            break;
        }
    }

    // Use the first row and first column to store information
    for ($i = 1; $i < $m; $i++) {
        for ($j = 1; $j < $n; $j++) {
            if ($matrix[$i][$j] == 0) {
                $matrix[$i][0] = 0;
                $matrix[0][$j] = 0;
            }
        }
    }

    // Set rows to zero based on the first column
    for ($i = 1; $i < $m; $i++) {
        if ($matrix[$i][0] == 0) {
            for ($j = 1; $j < $n; $j++) {
                $matrix[$i][$j] = 0;
            }
        }
    }

    // Set columns to zero based on the first row
    for ($j = 1; $j < $n; $j++) {
        if ($matrix[0][$j] == 0) {
            for ($i = 1; $i < $m; $i++) {
                $matrix[$i][$j] = 0;
            }
        }
    }

    // Zero out the first row if needed
    if ($firstRowZero) {
        for ($j = 0; $j < $n; $j++) {
            $matrix[0][$j] = 0;
        }
    }

    // Zero out the first column if needed
    if ($firstColZero) {
        for ($i = 0; $i < $m; $i++) {
            $matrix[$i][0] = 0;
        }
    }
        
    }
}

?>