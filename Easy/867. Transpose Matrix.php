<?php 
class Solution {

    /**
     * @param Integer[][] Input: matrix = [[1,2,3],[4,5,6],[7,8,9]]
     * @return Integer[][] Output: [[1,4,7],[2,5,8],[3,6,9]]
     */
    function transpose($matrix) {

        $m = count($matrix);
        $countRow = count($matrix[0]);
        
        $output = [];

        if ($countRow != $m) {
            $m = $countRow;

        }
        
        for ($i = 0; $i < $m; $i++) {
            
            for ($j = 0; $j < count($matrix); $j++) {

                $out[] = $matrix[$j][$i];
            }
            $output[] = $out;
            unset($out);
        }
        return $output;
    }
}
?>