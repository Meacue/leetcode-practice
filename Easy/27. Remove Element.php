<?php
class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $val
     * @return Integer
     */
    public $nums = [3,2,2,3];
    public $val = 3;
    
    function removeElement(&$nums, $val) {
        $lenNums = count($nums);
        for ($i = 0; $i <= $lenNums; $i++) {
            if ($nums[$i] == $val) {
                unset($nums[$i]);
            }
        }
        return count($nums);
    }
}
?>