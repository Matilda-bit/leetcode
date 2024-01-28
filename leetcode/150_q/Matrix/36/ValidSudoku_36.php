<?php

class Solution {

/**
 * HashMap
 * n x n sudoku
 * @param String[][] $board
 * @return Boolean
 *
 */
function isValidSudoku($board) {
    $rows = [];
    $cols = [];
    $subMatrix = [];
    $size = count($board);//out of loop to call it once
    for ($i = 0; $i < $size; $i++){
        $subRow = intval($i/3);
        for($j = 0; $j < $size; $j++ ){
            $value = $board[$i][$j];
            if ($value === '.') continue;
            if (isset($rows[$i][$value])) {
                return false;
                }
            if (isset($cols[$j][$value])) {
                return false;
            }
            
            $subCol = intval($j/3);
            if (isset($subMatrix[$subRow][$subCol][$value])) {
                return false;
            }
            $rows[$i][$value]++; // the same as = 1
            $cols[$j][$value]++;
            $subMatrix[$subRow][$subCol][$value]++;
        }
    }
    return true; 
}
}

?>