<?php

class Solution {

    /**
     * @param String $s
     * @return Boolean
     */
    function isPalindrome($s) {
        $s = strtolower($s);
        $rules = ['.', ',', ':', ';', ' ', '@', '[', ']', '{', '}', '\'', "\"", '#', '_', '-', '?', '!', '(', ')', '`'];
        $s = str_replace($rules, '', $s);
        $str = strrev($s);
        return $str === $s;
    }
}

?>