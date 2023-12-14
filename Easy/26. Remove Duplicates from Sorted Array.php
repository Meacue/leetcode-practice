<?php
class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    public $nums = [1,1,2];
    //Output: 2, nums = [1,2,_]
    function removeDuplicates(&$nums) {
        $numToCheck = $nums[0];
        for ($i = 1, $lenNums = count($nums); $i <= $lenNums; $i++) {
            if ($numToCheck == $nums[$i]) {
                unset($nums[$i]);
            } else {
                $numToCheck = $nums[$i];
            }
        }
        return;
    }
}
?>