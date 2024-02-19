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

    private static int $indexMax = -1;
    private static int $max = 0;

    /**
     * @param TreeNode $root
     * @return Integer
     */
    function maxDepth($root) {

        if (!$root){
            return 0;
        }elseif (!$root->left) {
            return 1+$this->maxDepth($root->right);
        }elseif (!$root->right){
            return 1+$this->maxDepth($root->left);
        } else {
            $left = $this->maxDepth($root->left);
            $right = $this->maxDepth($root->right);
            $res = ($left>$right)?$left:$right;
            return 1+ $res;
        }
        
    }

}

?>