<?php 
class Solution {

    /**
     * @param Integer[][] $mat 
     * @return Integer
     */
    public  $mat = [[1,0,0],[0,0,1],[1,0,0]];

    function numSpecial($mat) {
        
        $output = 0;

        $sumCol = 0;
        $sumRow = 0;

        for ($i = 0, $rows = count($mat); $i < $rows; $i++) {

            for ($j = 0, $columns = count($mat[$i]); $j < $columns; $j++) {

                $sumRow += $mat[$i][$j];

                if ($mat[$i][$j] == 1 && $sumRow == 1) {

                    for ($k = 0; $k < $rows; $k++) {

                        $sumCol += $mat[$k][$j];
                    }
                }
            }

            if ($sumCol == 1 && $sumRow == 1) {
                $output++;
            }
            unset($sumCol);
            unset($sumRow);
        }
                
        return $output;
    }
}
?>