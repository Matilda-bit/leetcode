<?php

class Solution {

    /**
     * @param Integer[] $ratings
     * @return Integer
     */
    function candy($ratings) {
        $n = count($ratings);
        $candies = array_fill(0, $n, 1); // Initialize candies array with all 1's

        // Left to right pass
        for ($i = 1; $i < $n; $i++) {
            if ($ratings[$i] > $ratings[$i - 1]) {
                $candies[$i] = $candies[$i - 1] + 1;
            }
        }

        // Right to left pass
        for ($i = $n - 2; $i >= 0; $i--) {
            if ($ratings[$i] > $ratings[$i + 1]) {
                $candies[$i] = max($candies[$i], $candies[$i + 1] + 1);
            }
        }

        // Sum up the candies array to get the total minimum candies needed
        return array_sum($candies);
    }
}

?>