<?php 
class Solution {

    /**
     * @param String $num
     * @return String
     */
    function largestOddNumber($num) {

      for ($i = strlen($num) - 1; $i >= 0; $i--) {
        if ($num[$i] % 2 != 0) {
          return $num;
        } else {
          $num = substr($num, 0, -1);
        }
      }
      return $num;
    }
}
?>