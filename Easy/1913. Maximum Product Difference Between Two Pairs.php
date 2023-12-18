<?php
class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */

     /*
        Input: nums = [5,6,2,7,4]
        Output: 34
     */
    function maxProductDifference($nums) {
        $sortNums = $this->quickSort($nums);

        $count = count($sortNums);

        return ($sortNums[$count - 1] * $sortNums[$count - 2]) - ($sortNums[0] * $sortNums[1]);
    }

    private function quickSort($nums) {
        $countNums = count($nums);
        if ($countNums <= 1) {
            return $nums;
        }

        $centerIndex = intdiv($countNums, 2);
        $centerElement = $nums[$centerIndex];

        $arrayLess = [];
        $arrayGreater = [];

        for ($i = 0; $i < $countNums; $i++) {
            if ($i == $centerIndex) {
                continue;
            }
            if ($nums[$i] < $centerElement) {
                $arrayLess[] = $nums[$i];
            } else {
                $arrayGreater[] = $nums[$i];
            }
        }

        return [...$this->quickSort($arrayLess), $centerElement, ...$this->quickSort($arrayGreater)];
    }
}
?>