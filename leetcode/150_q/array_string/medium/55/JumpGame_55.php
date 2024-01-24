<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @return Boolean
     */
    function canJump($nums) {
        $steps = $nums[0];
        $len = count($nums);
        for($i = 1; $i < $len; $i++){
            if($steps <= 0){
                return false;
            }
            if(--$steps < $nums[$i] ){
                $steps = $nums[$i];
            }         
        }
        return true;
    }
}

?>