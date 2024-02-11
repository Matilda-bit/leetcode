<?php
class Solution {

    /**
     * @param String[] $strs
     * @return String
     */
    function longestCommonPrefix($strs) {
        $res = "";
        $lenght = array_map('strlen', $strs);
        $len = min($lenght);
        $count = count($strs) - 1;
        for($i = 0; $i < $len; $i++) {
            foreach($strs as $key => $lets) {
                if($strs[0][$i] !== $lets[$i]) {
                    break 2;
                } elseif($key === $count) {
                    $res .= $lets[$i];
                }
            }
        }
            return $res;

        
    }
}

?>