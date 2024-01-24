<?php

class Solution {

    /**
     * @param Integer[] $nums1
     * @param Integer $m
     * @param Integer[] $nums2
     * @param Integer $n
     * @return NULL
     */
    function merge(&$nums1, $m, $nums2, $n) {
        //O(m + n),
        $i = $m - 1; 
        $j = $n - 1; 
        $k = $m + $n - 1; 

        while ($i >= 0 && $j >= 0) {
            if ($nums1[$i] > $nums2[$j]) {
                $nums1[$k--] = $nums1[$i--];
            } else {
                $nums1[$k--] = $nums2[$j--];
            }
        }
        while ($j >= 0) {
            $nums1[$k--] = $nums2[$j--];
        }

    //or
    //O((m + n) log(m + n)).
    //$nums1 = array_merge(array_slice($nums1, 0, $m), $nums2);
    //sort($nums1);
    }}

    
?>