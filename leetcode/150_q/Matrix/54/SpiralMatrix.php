<?php 

class Solution {

    /**
     * @param Integer[][] $matrix
     * @return Integer[]
     */
    function spiralOrder($matrix) {
        $result = [];

    while ($matrix) {
        // Process top row
        $result = array_merge($result, array_shift($matrix));

        // Process right column
        if ($matrix && $matrix[0]) {
            foreach ($matrix as &$row) {
                $result[] = array_pop($row);
            }
        }

        // Process bottom row
        if ($matrix && $matrix[0]) {
            $result = array_merge($result, array_reverse(array_pop($matrix)));
        }

        // Process left column
        if ($matrix && $matrix[0]) {
            $leftColumn = [];
            foreach ($matrix as &$row) {
                $leftColumn[] = array_shift($row);
            }
            $result = array_merge($result, array_reverse($leftColumn));
        }
    }

    return $result;
    }
}

?>