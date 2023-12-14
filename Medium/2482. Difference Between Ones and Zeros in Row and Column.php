<?php 
class Solution {

    /**
     * @param Integer[][] $grid
     * @return Integer[][]
     */
    /*
    Input: grid = [[0,1,1],[1,0,1],[0,0,1]]
    Output: [[0,0,4],[0,0,4],[-2,-2,2]]
    */
    
    public $grid = [[0,1,1],[1,0,1],[0,0,1]];
    function onesMinusZeros($grid) {
        $diff = [];
        $arraySumCol = [];
        $arraySumRow = [];

        $rows = count($grid);
        $columns = count($grid[0]);

        for ($i = 0; $i < $rows; $i++) {
            for ($j = 0; $j < $columns; $j++) {
                $value = $grid[$i][$j];
                $arraySumRow[$i] += $value;
                $arraySumCol[$j] += $value;
            }
        }

        for ($i = 0; $i < $rows; $i++) {
            for ($j = 0; $j < $columns; $j++) {
                $diff[$i][$j] = $arraySumRow[$i] + $arraySumCol[$j] 
                - ($columns - $arraySumRow[$i]) - ($rows - $arraySumCol[$j]);
            }
        }

        return $diff;
    }
}
?>