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
     * @param TreeNode $root
     * @return String
     */
    function tree2str($root) {
      $output = "";

      $output .= $root->val;

      if (!$root->left && !$root->right) {
        return $output;
      }

      if ($root->left) {
        $output .= "(".$this->tree2str($root->left).")";
      } else {
        $output .= "()";
      }

      if ($root->right) {
        $output .= "(".$this->tree2str($root->right).")";
      }

      return $output;
    }
}
?>