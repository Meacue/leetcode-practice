<?php
class Solution {

    /**
     * @param String[] $strs
     * @return String
     */
    public $strs = ["flower","flow","flight"];
    //"fl"
    function longestCommonPrefix($strs) {
        $first_str_chars = [];
        $prefix = "";
        foreach ($strs as $key => $str) {
            for ($i = 0, $lenStr = strlen($strs[0]); $i < $lenStr; $i++) {
                if ($key == 0) {
                    $prefix .= $str[$i];
                    array_push($first_str_chars, $str[$i]);
                } elseif ($str[$i] != $first_str_chars[$i]) {
                    $prefix = substr($prefix, 0, $i);
                }
            }
        }
        return $prefix;
    }
}
?>