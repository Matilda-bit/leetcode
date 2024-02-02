<?php

class Solution {

/**
 * @param String $s
 * @return Integer
 */
function romanToInt($s) {
    $str = str_split($s);
    $res = 0;
    $val = array_pop($str);

    while($val === "I") {
        $res ++;
        $val = array_pop($str);
    }
    
    while($val === "V") {
        $res += 5;
        $val = array_pop($str);
        while($val === "I") {
            $res --;
            $val = array_pop($str);
        }
        
    }
    while($val === "X") {
        $res += 10;
        $val = array_pop($str);
        while($val === "I") {
            $res --;
            $val = array_pop($str);
        }
        
    }

    if($val === "L") {
        $res += 50;
        $val = array_pop($str);
            while($val === "X") {
                $res -= 10;
                $val = array_pop($str);
            }
    }
    

    while($val === "C") {
        $res += 100;
        $val = array_pop($str);
        while($val === "X") {
            $res -= 10;
            $val = array_pop($str);
        }
    }
                
    if($val === "D") {
        $res += 500;
        $val = array_pop($str);
        while($val === "C") {
            $res -= 100;
            $val = array_pop($str);
        }
    }

    if($val === "M") {
        $res += 1000;
        $val = array_pop($str);
        while($val === "C") {
            $res -= 100;
            $val = array_pop($str);
        }
        while($val === "M"){
            $res += 1000;
            if(empty($str)){
                break;
            }
            $val = array_pop($str);
        }
    }
    return $res;
    
}
}

?>