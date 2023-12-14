<?php
class Solution {

    /**
     * @param Integer $x
     * @return Boolean
     */
    public $x = 121;
    //Output: true
    function isPalindrome($x) {
        if ($x < 0) {
            return false;
        }
        $deconstructX = $x;
        $reverseX = 0;
        while ($deconstructX > 0) {
            $digit = $deconstructX % 10;
            $deconstructX = intdiv($deconstructX, 10);
            $reverseX = $reverseX * 10;
            $reverseX = $reverseX + $digit;
        }
        if ($x == $reverseX) {
            return true;
        } else {
            return false;
        }
    }
}
?>