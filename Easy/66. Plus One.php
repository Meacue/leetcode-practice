<?php
class Solution {

    /**
     * @param Integer[] $digits
     * @return Integer[]
     */
    /*
    Input: digits = [1,2,3]
    Output: [1,2,4]
    */
    public $digits = [1,2,3];
    
    function plusOne($digits) {
        for ($i = count($digits) - 1; $i >= 0; $i--) {
            if ($digits[$i] < 9) {
                $digits[$i] = $digits[$i] + 1;
                return $digits; 
            } else {
                $digits[$i] = 0;
            }
        }
        array_unshift($digits, 1);
        return $digits; 
    }
}
?>