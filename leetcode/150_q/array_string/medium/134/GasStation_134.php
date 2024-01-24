<?php

class Solution {

    /**
     * @param Integer[] $gas
     * @param Integer[] $cost
     * @return Integer
     */
    function canCompleteCircuit($gas, $cost) {
        $n = count($gas);

        $totalGas = 0;
        $totalCost = 0;
        for ($i = 0; $i < $n; $i++) {
            $totalGas += $gas[$i];
            $totalCost += $cost[$i];
        }
        if ($totalGas < $totalCost) {
            return -1; 
        }
        
        $currentGas = 0;
        $startStation = 0;
        
        for ($i = 0; $i < $n; $i++) {
            $currentGas += $gas[$i] - $cost[$i];
            if ($currentGas < 0) {
                $startStation = $i + 1;
                $currentGas = 0;
            }
        }
        
        return $startStation;

    }
}

?>