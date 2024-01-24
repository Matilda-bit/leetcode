<?php

class Solution {
    function removeElement(&$nums, $val): int {
        $k = 0;
        foreach($nums as $num){
            if($nums !== $val) {
                $nums[$k] = $num;
                $k++;
            }
        }
        return $k;
    }
}

//examples to run:
$nums = [3,2,2,3];
$val = 3;
//or
$nums = [0,1,2,2,3,0,4,2];
$val = 2;
?>
