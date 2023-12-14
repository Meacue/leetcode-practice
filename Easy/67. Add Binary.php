<?php
class Solution {

    /**
     * @param String $a
     * @param String $b
     * @return String
     */

     /*
        Input: a = "11", b = "1"
        Output: "100"
     */

    public $a = "11";
    public $b = "1";

    function addBinary($a, $b) {

        $stringAB = "";
        $lenA = strlen($a) - 1;
        $lenB = strlen($b) - 1;
        $big = $a;
        $small = $b;
        $bigLen = $lenA;
        $smallLen = $lenB;
        if ($lenA < $lenB) {
            $big = $b; 
            $small = $a;
            $bigLen = $lenB;
            $smallLen = $lenA;
        }

        $isCarryOne = false;
        $temp = "";

        for ($j = $bigLen; $j >= 0; $j--) {
            if ($smallLen < 0) {
               $small = 0;
               $smallLen = 0;
            }
            if ($small[$smallLen] == true && $big[$j] == true) {
                if ($isCarryOne) {
                    $temp = "1";
                } else $temp = "0";
                $isCarryOne = true;
            } elseif ($small[$smallLen] == false && $big[$j] == false) {
                if ($isCarryOne) {
                    $temp = "1";
                    $isCarryOne = false;
                } else $temp = "0";
            } else {
                 if ($isCarryOne) {
                    $temp = "0";
                    $isCarryOne = true;
                } else $temp = "1";
            }
            $stringAB = $temp.$stringAB;
            $smallLen--;
        }
        if ($isCarryOne) {
            $stringAB = "1".$stringAB;
        }
        return $stringAB;
       
    }
}
?>