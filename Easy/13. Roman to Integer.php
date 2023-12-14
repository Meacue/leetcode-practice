<?php
class Solution {

    /**
     * @param String $s
     * @return Integer
     */

    public $s = "MCMXCIV";
    //Output: 1994

    function romanToInt($s) {
        $dictionary = [
            "symbols" => [
            1 => "I",
            5 => "V",
            10 => "X",
            50 => "L",
            100 => "C",
            500 => "D",
            1000 => "M"
            ],
            "subSymbols" => [
                4 => "IV",
                9 => "IX",
                40 => "XL",
                90 => "XC",
                400 => "CD",
                900 => "CM"
            ]
                      
        ];
        $stringDeconstruct = "";
        $integersFromString = [];
        $stringDeconstruct .= $s;

        foreach ($dictionary["subSymbols"] as $key => $value) {
            if (str_contains($stringDeconstruct, $value)) {
               array_push($integersFromString, $key);
               $stringDeconstruct = str_replace($value, "", $stringDeconstruct);
            }
        }
        foreach ($dictionary["symbols"] as $key => $value) {
            if (str_contains($stringDeconstruct, $value)) {
               $stringDeconstruct = str_replace($value, "", $stringDeconstruct, $countReplace);
               for ($i = 1; $i <= $countReplace; $i++) {
                   array_push($integersFromString, $key);
               }
            }
        }
        return array_sum($integersFromString);
    }
}
?>