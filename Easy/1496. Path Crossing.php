<?php 
class Solution {

    /**
     * @param String $path
     * @return Boolean
     */
    /*
        Input: path = "NES"
        Output: false 
    */
    function isPathCrossing($path) {
        $hashMap = [];
        $pathLen = strlen($path);
        $x = 0;
        $y = 0;
        $hashMap["($x, $y)"] = 1;

        for ($i = 0; $i < $pathLen; $i++) {
            if ($path[$i] == "N") {
                $y += 1;
            } elseif ($path[$i] == "S") {
                $y -= 1;
            } elseif ($path[$i] == "E") {
                $x += 1;
            } else {
                $x -= 1;
            }
            if ($hashMap["($x, $y)"]) {
                return true;
            }
            $hashMap["($x, $y)"] = 1;
        }
        return false;
    }
}

?>