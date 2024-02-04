<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer[]
     */
    function twoSum($nums, $target):?array{
        $table = [];
        $size = count($nums);
        for( $i = 0; $i < $size; $i++) {
            $value = $target - $nums[$i];
            if(isset($table[$value])){
                return [$table[$value], $i];
            }
            
            $table[$nums[$i]] = $i;
        }
        
        return null;
    }

}