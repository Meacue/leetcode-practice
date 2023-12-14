<?php 
class Solution {

    /**
     * @param String $num
     * @return String
     */
    function largestGoodInteger($num) {

        $goodMaxString = "";
        $maxNum = 0;

        for ($i = 0, $lenNum = strlen($num) - 2; $i < $lenNum; $i++) {
            

            if ($num[$i] == $num[$i + 1] && $num[$i] == $num[$i + 2]) {
                if (empty($maxNum)) {
                    $maxNum = $num[$i];
                    $goodMaxString = $num[$i].$num[$i].$num[$i];
                } else {
                    if ($maxNum < $num[$i]) {
                        $maxNum = $num[$i];
                        $goodMaxString = $num[$i].$num[$i].$num[$i];
                    }
                }
            }
        }

        return $goodMaxString;
    }
}
?>