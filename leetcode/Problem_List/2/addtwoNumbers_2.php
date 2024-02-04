<?php

/**
 * Definition for a singly-linked list.
 * class ListNode {
 *     public $val = 0;
 *     public $next = null;
 *     function __construct($val = 0, $next = null) {
 *         $this->val = $val;
 *         $this->next = $next;
 *     }
 * }
 */
class Solution {

    /**
     * @param ListNode $l1
     * @param ListNode $l2
     * @return ListNode
     */
    function addTwoNumbers($l1, $l2) {

        $sum = 0;
        $current = new ListNode();
        $result = $current;

        while($l1 || $l2) {
            if($l1) {
                $sum += $l1->val;
                $l1 = $l1->next;
            }

            if($l2) {
                $sum += $l2->val;
                $l2 = $l2->next;
            }

            $current->next = new ListNode($sum%10);
            $current = $current->next;

            $sum = $sum > 9 ? 1 : 0;
        }

        if($sum) {
            $current->next = new ListNode($sum);
        }

        return $result->next;

    }
}
?>