<?php
class Solution {

    /**
     * @param Integer[] $height
     * @return Integer
     */
    function trap($height) {

        $ans = 0;
        $size = count($height);
        $maxLeft = $maxRight = [];
        $maxLeft[0] = $height[0];

        //echo "ans = 0, size = " . $size . " maxLeft = maxRight = []\n";
        //echo "maxLeft[0] = " . $height[0] . "\n";
        for ($i = 1; $i < $size; $i++){
            $maxLeft[$i] = max($maxLeft[$i-1],$height[$i]);  
            //echo "maxLeft[i] = max(" . $maxLeft[$i-1] . ", " . $height[$i] . ") = " . $maxLeft[$i] . "\n";            
        }
        //echo "maxRight[size - 1] = " . $height[$size - 1] . "\n";

        $maxRight[$size - 1] = $height[$size - 1];
        for ($i = $size; $i >= 0; $i--){
            $maxRight[$i] = max($maxRight[$i+1], $height[$i]);
            //echo "maxRight[i] = max(" . $maxRight[$i+1] . ", " . $height[$i] . ") = " . $maxRight[$i] . "\n";            
        }

        for ($i = 1; $i < $size - 1; $i++){
            $t = min($maxLeft[$i],$maxRight[$i]) - $height[$i];
            $ans += $t;      
            //echo "ans += min(" . $maxLeft[$i] . ", " . $maxRight[$i] . ") - " . $height[$i] . " = " . $t . "\n";      
        }

        return $ans;
        
    }
}
?>