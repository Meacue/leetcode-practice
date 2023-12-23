<?php
class Solution {

    /**
     * @param String $s
     * @return Integer
     */
    function maxScore($s) {
        $calcOnesAndZeros = [];
        $countOnes = 0;
        $countZeros = 0;
        $count = strlen($s);

        $output = 0;

        for ($i = 0; $i < $count; $i++) {
            if ($s[$i] == true) {
                $countOnes++;

            } else {
                $countZeros++;
            }
            $calcOnesAndZeros[0][$i] = $countZeros; 
            $calcOnesAndZeros[1][$i] = $countOnes; 
        }
        
        if ($countOnes == 0 || $countZeros == 0) {
            return $count - 1;
        }

        for ($i = 0; $i < $count - 1; $i++) {
            $temp = $calcOnesAndZeros[0][$i] + ($countOnes - $calcOnesAndZeros[1][$i]);
            if ($output < $temp) {
                $output = $temp;
            }
        }
        
        return $output;
    }
}
?>