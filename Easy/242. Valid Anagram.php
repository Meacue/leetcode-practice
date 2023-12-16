<?php 
class Solution {

    /**
     * @param String $s
     * @param String $t
     * @return Boolean
     */

//      Input: s = "anagram", t = "nagaram"
//      Output: true

    function isAnagram($s, $t) {
        $lenS = strlen($s);
        $lenT = strlen($t);

        $hashChars = [];

        if ($lenS != $lenT) {
            return false;
        }

        for ($i = 0; $i < $lenS; $i++) {
            $hashChars[$s[$i]] += 1;
        }

        for ($i =0; $i < $lenT; $i++) {
            $hashChars[$t[$i]] -= 1;
        }

        if (max($hashChars) == 0) {
            return true;
        } else {
            return false;
        }
    }
}
?>