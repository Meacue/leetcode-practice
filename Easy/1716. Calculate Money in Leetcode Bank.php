<?php 
class Solution {

    /**
     * @param Integer $n
     * @return Integer
     */
    function totalMoney($n) {
        $mondayK = 0;
        $output = 0;
        $a = 0;

        for ($i = 1; $i <= $n; $i++) {

            $a = $a + 1;
            $output += $a;

            if ($i % 7 == 0) {
                $mondayK = $mondayK + 1;
                $a = $mondayK;
            }

        }
        
        return $output;
    }
}
?>