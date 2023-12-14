<?php 
class Solution {

    /**
     * @param Integer[][] $points = [[1,1],[3,4],[-1,0]]
     * @return Integer 7
     */
    
    public $points = [[1,1],[3,4],[-1,0]];

    function minTimeToVisitAllPoints($points) {
        
        $timeCount = 0;

        for ($i = 0, $pointsCount = count($points) - 1; $i < $pointsCount; $i++) {
            $currentPoint = $points[$i];
            $nextPoint = $points[$i + 1];

            $xEdge = abs($nextPoint[0] - $currentPoint[0]);
            $yEdge = abs($nextPoint[1] - $currentPoint[1]);

            if ($xEdge > $yEdge) {
                $timeCount += $xEdge;
            } else {
                $timeCount += $yEdge;
            }
        }

        return $timeCount;
    }
}
?>