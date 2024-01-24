<?php
class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function majorityElement($nums) {
        $t = array_count_values($nums);
        arsort($t);
        return array_key_first($t);
    }
}

?>