<?php
class Solution {

    /**
     * @param String $haystack
     * @param String $needle
     * @return Integer
     */
    function strStr($haystack, $needle) {
        if(!str_contains($haystack, $needle)){
            return -1;
        }
        $index = stripos($haystack, $needle);
        return $index;
    }
}

?>