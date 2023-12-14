<?php
class Solution {

    /**
     * @param String $s
     * @return Boolean
     */

     /*
        Input: s = "()"
        Output: true
     */
    function isValid($s) {
        $sLength = strlen($s);
        if ($sLength % 2 !== 0) return false; 
        $brackets = ['(' => ')', '[' => ']', '{' => '}'];
        $closedBracketStack = [];

        for ($i = 0; $i < $sLength; $i++) {
            if (array_key_exists($s[$i], $brackets)) {
                $closedBracketStack[] = $brackets[$s[$i]];
            } elseif (array_pop($closedBracketStack) !== $s[$i]) {
                return false;
            }
        }
        return count($closedBracketStack) === 0;
        
    }
}
?>