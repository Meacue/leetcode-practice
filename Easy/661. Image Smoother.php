<?php 
class Solution {

    /**
     * @param Integer[][] $img
     * @return Integer[][]
     */
    public $img = [[1,1,1],[1,0,1],[1,1,1]];
    //Output: [[0,0,0],[0,0,0],[0,0,0]]
    
    function imageSmoother($img) {
        $countImg = count($img);
        $countImgEl = count($img[0]);
        
        $avgEls = 0;
        $avgCount = 0;
        $avgImg = [];

        for ($i = 0; $i < $countImg; $i++) {
            for ($j = 0; $j < $countImgEl; $j++) {
                
                for ($y = max(0, $i - 1); $y < min($countImg, $i + 2); $y++) {
                    for ($x = max(0, $j - 1); $x < min($countImgEl, $j + 2); $x++) {
                        $avgEls += $img[$y][$x];
                        $avgCount++;
                    }
                }
                
                $avgImg[$i][$j] = intdiv($avgEls, $avgCount);
                unset($avgEls);
                unset($avgCount);
            }
        }
        return $avgImg;
    }
}
?>