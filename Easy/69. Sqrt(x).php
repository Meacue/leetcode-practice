<?php 
class Solution {

    /**
     * @param Integer $x
     * @return Integer 
     */
    public $x = 4;

    function mySqrt($x) {
        $y = 1;
        while (abs($y * $y - $x) > 0.5) {
            $y = ($y + $x/$y) / 2;
        }
        return (int)$y;
    }
}
?>