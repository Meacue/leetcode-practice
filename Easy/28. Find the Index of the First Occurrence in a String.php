<?php
class Solution {

    /**
     * @param String $haystack
     * @param String $needle
     * @return Integer
     */
    public $haystack = "sadbutsad";
    public $needle = "sad";
    //Output: 0
    function strStr($haystack, $needle) {

        $lenNeedle = strlen($needle);
        $lenHaystack = strlen($haystack);
        $desiredNeedle = '';

        if($haystack > $needle){
            $lenHaystack = strlen($haystack) - $lenNeedle;
        }
     
    
        for ($i = 0; $i < $lenHaystack; $i++) {
            for ($j = 0; $j < $lenNeedle; $j++) {
                if ($needle[$j] == $haystack[$j + $i]) {
                    $desiredNeedle .= $needle[$j];
                    if ($desiredNeedle == $needle){
                        return $i;
                    }
                } else {
                    $desiredNeedle = '';
                    break;
                }
            }
        }
        return -1;
    }
}
?>