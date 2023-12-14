<?php
class Solution {

    /**
     * @param String $s
     * @return String
     */
    public $s = "Let's take LeetCode contest";
    //"s'teL ekat edoCteeL tsetnoc"
    
    function reverseWords($s) {
        $reverseString = "";
        $temp = "";

        $left = 0;
        $right = 0;

        $lenS = strlen($s) - 1;
        for ($i = 0; $i <= $lenS; $i++) {
            if ($s[$i] == " ") {
                $right = $i - 1; 
                while ($left <= $right) {
                    $temp .= $s[$right];
                    $right--;
                }
                $reverseString .= $temp." ";
                unset($temp);
                $left = $i + 1;
            }
            if ($i == $lenS) {
                $right = $i;
                while ($left <= $right) {
                    $temp .= $s[$right];
                    $right--;
                }
                $reverseString .= $temp;
                unset($temp);
            }
        }
        return $reverseString;
    }
}
?>