<?php
class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer[]
     */
    public $nums = [2,7,11,15];
    public $target = 9;
    //Output: [0,1]
    
    function twoSum($nums, $target) {
        foreach ($nums as $key => $value) {
            $firstNumbKey = $key;
            $firstNumb = [$firstNumbKey => $value];
            for ($key = $key + 1, $size = count($nums); $key <= $size; ++$key) {
                $countTarget = $firstNumb[$firstNumbKey] + $nums[$key];
                if ($countTarget == $target) {
                    return $output[] = [$firstNumbKey, $key];
                }
            }
        }
    }
}
?>