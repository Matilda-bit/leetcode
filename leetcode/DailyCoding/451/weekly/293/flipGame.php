<?php
class Solution {

    /**
     * @param String $currentState
     * @return String[]
     */
    function generatePossibleNextMoves($currentState) {
        $result = [];
        $len = strlen($currentState);
        for($i=1;$i<$len;$i++){
            if($currentState[$i-1] == '+' && $currentState[$i] == '+'){
                $temp = $currentState;
                $temp[$i] = '-';
                $temp[$i-1] = '-';
                $result[] = $temp;
            }
        }
        return $result;
        
    }
}
?>