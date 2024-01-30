<?php
class Solution {

    /**
     * @param String $s
     * @return Boolean
     */
    function isValid($s): bool{
        $stack = [];
        $chars = str_split($s);
        $rules = [["(", ")"], ["{","}"] , ["[","]"]];

        foreach($chars as $key => $c) {
            if ($c === "(" || $c === "{" || $c === "[") {
                array_push($stack, $c);
                array_pop($chars);
                if(empty($chars)){
                    return false;
                }
            } else {
                if(!empty($stack)) {
                    $open = array_pop($stack);
                    if($open === $rules[0][0] && $c !== $rules[0][1]
                    || $open === $rules[1][0] && $c !== $rules[1][1]
                    || $open === $rules[2][0] && $c !== $rules[2][1]) {
                        return false;
                    }
                    array_pop($chars);
                }
            }
        }

        if(!empty($chars) || !empty($stack)) {
            return false;
        }
        return true;
    }
}
?>