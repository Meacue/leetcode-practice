<?php
class Solution {

    /**
     * @param Integer[] $arr
     * @return Integer
     */
    public $arr = [1,2,2,6,6,6,6,7,10];

    function findSpecialInteger($arr) {
        $countArr = count($arr);

        $arrMap = [];
        $pr = $countArr / 4;

        for ($i = 0; $i < $countArr; $i++) {
            $arrMap[$arr[$i]] += 1;
            if ($arrMap[$arr[$i]] > $pr) {
                return $arr[$i];
            }
        }

        return -1;
    }

    function findSpecialInteger2($arr) {
        $countArr = count($arr);

        $arrMap = [];
        $prevVal = 0;
        $max = 0;

        for ($i = 0; $i < $countArr; $i++) {
            $arrMap[$arr[$i]] += 1;
            if ($arrMap[$arr[$i]] > $prevVal) {
                $prevVal = $arrMap[$arr[$i]];
                $max = $arr[$i];
            }
        }

        return $max;
    }

}
?>