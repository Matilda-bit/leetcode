<?php

class Solution {

    /**
     * @param String[] $strs
     * @return String[][]
     */
    function groupAnagrams($strs) {
        $strings = array();

        foreach ($strs as $string) {
            $sorted_array = str_split($string);  // Convert string to array of characters
            sort($sorted_array);                 // Sort the array alphabetically
            $sorted_string = implode($sorted_array);  // Join the sorted characters back into a string
            $strings[$sorted_string][] = $string;
        }

        return array_values($strings);
        
    }
}

?>