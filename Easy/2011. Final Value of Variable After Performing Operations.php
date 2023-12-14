<?php 
class Solution {

    /**
     * @param String[] $operations
     * @return Integer
     */
    public $operations = ["--X","X++","X++"];
    
    function finalValueAfterOperations($operations) {
        $X = 0;
        for ($i = 0, $countOperations = count($operations); $i < $countOperations; $i++) {
            if ($operations[$i][1] == "+") {
                $X++;
            } else {
                $X--;
            }
        }

        return $X;
    }
}
?>