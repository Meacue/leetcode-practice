<?php
class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer
     */
    public $nums = [1,3,5,6];
    public $target = 5;
    
    function searchInsert($nums, $target) {
        $start = 0;
        $end = count($nums) - 1;
        $found = false;
        $position = -1;
        
        while ($found == false && $start <= $end) {
            $midIndex = intdiv($start + $end, 2);
            if ($nums[$midIndex] == $target) {
                $found = true;
                $position = $midIndex;
                return $position;
            }
            if ($target < $nums[$midIndex]) {
                $end = $midIndex - 1;
            } else {
                $start = $midIndex + 1;
            }
        }
        return $start;
    }
}
?>