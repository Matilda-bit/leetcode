<?php
/**
 * Definition for a binary tree node.
 * class TreeNode {
 *     public $val = null;
 *     public $left = null;
 *     public $right = null;
 *     function __construct($val = 0, $left = null, $right = null) {
 *         $this->val = $val;
 *         $this->left = $left;
 *         $this->right = $right;
 *     }
 * }
 */
class Solution {

    /**
     * @param TreeNode $p
     * @param TreeNode $q
     * @return Boolean
     */
    function isSameTree($p, $q) {
        if(!$p && !$q) {
            return true;
        }
        if($p && $q) {
            return $p->val == $q->val && $this->isSameTree($p->left,$q->left) && $this->isSameTree($p->right, $q->right);            
        } else {
            return false;
        }

        //return $p == $q;
    }
}
?>