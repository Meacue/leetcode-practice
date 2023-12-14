<?php 
class Solution {

    /**
     * @param String[] $word1 ["ab", "c"];
     * @param String[] $word2 ["a", "bc"];
     * @return Boolean true
     */
    public $word1 = ["ab", "c"];
    public $word2 = ["a", "bc"];

    function arrayStringsAreEqual($word1, $word2) {
        $stringFromWord1 = "";
        $stringFromWord2 = "";

        $lenWord1 = 0;
        $lenWord2 = 0;

        foreach ($word1 as $element) {
            $stringFromWord1 = $stringFromWord1.$element;
        }

        foreach ($word2 as $element) {
            $stringFromWord2 = $stringFromWord2.$element;
        }

        $lenWord1 = strlen($stringFromWord1);
        $lenWord2 = strlen($stringFromWord2);

        if ($lenWord1 != $lenWord2) {
            return false;
        }

        for ($i = 0; $i <= $lenWord1; $i++) {
            if ($stringFromWord1[$i] != $stringFromWord2[$i]) {
                return false;
            }
        }

        return true;
    }
}
?>