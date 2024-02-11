<?php
class Solution {

    /**
     * @param String $s
     * @return String
     */
    function reverseWords($s) {
        $arr = explode(" ", trim($s));
        $arr = array_filter($arr, function($k) {
            return $k !== '';
        });
        $arr = array_reverse($arr);
        return implode(" ", $arr);
    }
}

?>