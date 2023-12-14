<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    public $nums = [3,4,5,2];
    
    function maxProduct($nums) {
        $maxNum = 1;
        $val = 0;

        sort($nums);
        $val = array_pop($nums);

        $maxNum = ($val - 1) * (array_pop($nums) - 1); 

        return $maxNum;
    }
}
?>