<?php
class Solution {

/**
 * @param String $s
 * @return String
 */
function frequencySort($s) {
    $str = str_split($s);
    $dictonary = [];
    foreach($str as $c) {
        if(isset($dictonary[$c])) {
            $dictonary[$c] = $dictonary[$c] + 1;
        } else {
            $dictonary[$c] = 1;
        }
    }

     arsort($dictonary);

    $res = "";
     foreach($dictonary as $k => $d) {
         while($d > 0){
            $res .= $k; 
            $d-- ; 
         }
     }
    return $res;    
}
}

?>