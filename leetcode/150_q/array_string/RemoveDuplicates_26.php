<?php

class Solution {

/**
 * @param Integer[] $nums
 * @return Integer
 */
function removeDuplicates(&$nums): int {
    $len = count($nums);

    $k = 0;
    for ($i = 0; $i < $len; $i++){
        $num = $nums[$i];
        $nums[$k] = $num;
        $k++;
        while($num === $nums[$i + 1] && $i < $len){
            $i ++;
        }
    }
    return $k;
}
}

?>