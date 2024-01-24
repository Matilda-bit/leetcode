<?php

class Solution {

/**
 * @param Integer[] $nums
 * @return Integer
 */
function removeDuplicates(&$nums) {
    $len = count($nums);
    for($i=0; $i < $len; $i++){
        $num = $nums[$i];
        if(isset($nums[$i+2]) && $num === $nums[$i+1] && $num === $nums[$i + 2]){
                unset($nums[$i]);   
        }
    }

    return count($nums);
}
}
?>