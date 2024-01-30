<?php

class Solution {

    /**
     * @param String[][] $board
     * @param Integer[] $click
     * @return String[][]
     */
    function updateBoard($board, $click) {
    
    $i = $click[0];
    $j = $click[1];

    if($board[$i][$j] === 'M'){
        $board[$i][$j] = 'X';
        return $board;
    }

    // Define directions for adjacent cells
    $vectors = [[-1, -1],[-1, 0], [-1, 1], [0, 1], [1, 1], [1, 0], [1, -1],[0, -1]];
    // Use DFS to reveal empty cells and update the board
    $this->dfs($board, $i, $j, $vectors, count($board), count($board[0]));
    return $board;
}

function dfs(&$board, $i, $j, $vectors, $sizeL, $sizeW) {
    // Check if the current cell is out of bounds
    if ($i < 0 || $i >= $sizeL || $j < 0 || $j >= $sizeW || $board[$i][$j] != 'E') {
        return;
    }

    // Count adjacent mines
    $mineCount = $this->countAdjacentMines($board, $vectors, $i, $j);

    if ($mineCount > 0) {
        // If there are adjacent mines, update the cell with the mine count
        $board[$i][$j] = strval($mineCount);
    } else {
        // If no adjacent mines, mark the cell as 'B' and recursively explore neighbors
        $board[$i][$j] = 'B';

        foreach ($vectors as $v) {
            $newRow = $i + $v[0];
            $newCol = $j + $v[1];
            $this->dfs($board, $newRow, $newCol, $vectors, $sizeL, $sizeW);
        }
    }
}

function countAdjacentMines($board, $vectors, $i, $j) {
    $mineCount = 0;
    // Check 8 cells for mines
    foreach ($vectors as $v) {
        $newRow = $i + $v[0];
        $newCol = $j + $v[1];

        if ($newRow >= 0 && $newRow < count($board) && 
        $newCol >= 0 && $newCol < count($board[0]) && 
        $board[$newRow][$newCol] == 'M') {
            $mineCount++;
        }
    }

    return $mineCount;
}
}

?>