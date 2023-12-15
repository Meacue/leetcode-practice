<?php 
class Solution {

    /**
    * @param String[][] $paths
    * @return String
    */
    public $paths = [["London","New York"],["New York","Lima"],["Lima","Sao Paulo"]];
    //Output: "Sao Paulo" 
    function destCity($paths) {
        $hashmap = [];

        $pathCount = count($paths);

        for ($i = 0; $i < $pathCount; $i++) {
            $hashmap[$paths[$i][0]] = $paths[$i][1]; 
        }

        for ($i = 0; $i < $pathCount; $i++) {
            if (!array_key_exists($paths[$i][1], $hashmap)) {
                return $paths[$i][1];
            }
        }
    }
}
?>