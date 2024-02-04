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
     * @param ListNode $list1
     * @param ListNode $list2
     * @return ListNode
     */
    function mergeTwoLists($list1, $list2) {
        $result = new ListNode();
        $temp = $result;
        while(!is_null($list1) && !is_null($list2)){
            if($list1->val < $list2->val){
                $temp->next = $list1;
                $list1 = $list1->next;
            } else {
                $temp->next = $list2;
                $list2 = $list2->next;
            }  
            $temp = $temp->next;
        }

        if(!is_null($list1)){
            echo "!!!!";
            $temp->next = $list1;
        } elseif(!is_null($list2)){
            echo "!!!!&&&";
            $temp->next = $list2; 
        }

        return $result->next;
        
    }
}

?>