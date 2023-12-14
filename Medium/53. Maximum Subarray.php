<?php 
class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    public $nums = [-2,1,-3,4,-1,2,1,-5,4];
    //Output: 6
    function maxSubArray($nums) {

        $sumSubArray = 0;

        $largestSum = $nums[0];

        for ($i = 0, $lenNums = count($nums); $i <= $lenNums; $i++) {
            $sumSubArray += $nums[$i];
            if ($nums[$i] > $sumSubArray) {
                $sumSubArray = $nums[$i];
            }
            if ($sumSubArray > $largestSum) {
                $largestSum = $sumSubArray;
            }
            
        }
        
        return $largestSum;
    }
}
?>