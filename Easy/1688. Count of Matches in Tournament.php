<?php 
class Solution {

    /**
     * @param Integer $n = 7;
     * @return Integer 6
     */

    public $n = 7;

    function numberOfMatches($n) {
        
        $oneRandomTeam = 1;
        $matches = 0;

        while ($n != 1) {
            if (($n % 2) == 0) {
                $matches += $n / 2;
                $n = $n / 2;
            } else {
                $matches += ($n - $oneRandomTeam) / 2;
                $n = ($n - $oneRandomTeam) / 2 + $oneRandomTeam;

            }
        }
        return $matches;
    }
}
?>