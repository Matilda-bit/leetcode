<?php

class Solution {

    /**
     * @param String[] $strs
     * @return String[][]
     */
    function groupAnagrams($strs) {
        $dictonary = [];
        $result = [];
        $count = 0;
        foreach($strs as $k => $s) {
            $lets = str_split($s);
            sort($lets);
            $lets = implode($lets);
            if(in_array($lets, $dictonary)){
                $key = array_search($lets, $dictonary);
                $result[$key][] = $s;
            } else {
                $result[$count++][] = $s;
                $dictonary[] = $lets;
            }
        }
        return $result;
        
    }
}

?>