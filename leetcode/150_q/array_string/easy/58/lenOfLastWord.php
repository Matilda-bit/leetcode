<?php


class Solution {

    /**
     * @param String $s
     * @return Integer
     */
    function lengthOfLastWord($s) {
        $str = str_split($s);
        $val = array_pop($str);
        $count = 0;
        while(!empty($val) && $val === " "){
            $val = array_pop($str);
        }
        while($val !== " "){
            $count++;
            if(!empty($str)) {
                $val = array_pop($str);
            } else {
                break;
            }
            
        }
        return $count;
    }
}

?>