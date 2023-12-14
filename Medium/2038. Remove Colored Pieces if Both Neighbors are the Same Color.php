<?php 
class Solution {

    /**
     * @param String $colors
     * @return Boolean
     */
    
    public $colors = "AAABABB";

    function winnerOfGame($colors) {

        $lenIndexColors = strlen($colors) - 1;
        $quantityA = 0;
        $quantityB = 0;
        $aliceAllowedRemoves = 0;
        $bobAllowedRemoves = 0;


        for ($i = 0; $i <= $lenIndexColors; $i++) {
            if ($colors[$i] == "A") {
                unset($quantityB);
                $quantityA++;
                if ($quantityA >= 3) {
                    $aliceAllowedRemoves++;
                }
            } else {
                unset($quantityA);
                $quantityB++;
                if ($quantityB >= 3) {
                    $bobAllowedRemoves++;
                }
            }
        }
        if ($bobAllowedRemoves >= $aliceAllowedRemoves) {
            return false;
        } else {
            return true;
        }
    }
}
?>