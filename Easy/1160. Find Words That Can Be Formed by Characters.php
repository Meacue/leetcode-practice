<?php 
class Solution {

    /**
     * @param String[] $words = ["cat","bt","hat","tree"], chars = "atach"
     * @param String $chars = "atach"
     * @return Integer 6
     */
    public $words = ["cat","bt","hat","tree"];
    public $chars = "atach";

    function countCharacters($words, $chars) {

        $charsMap = [];
        $lenWords = 0;

        for ($i = 0, $lenChars = strlen($chars); $i < $lenChars; $i++) {
            $charsMap[$chars[$i]] += 1;
        }

        foreach ($words as $word) {
            $cloneCharsMap = $charsMap;
            $tempLen = 0;

            for ($i = 0, $lenWord = strlen($word); $i < $lenWord; $i++) {

                if (isset($cloneCharsMap[$word[$i]])) {
                    if ($cloneCharsMap[$word[$i]] > 0) {
                        $cloneCharsMap[$word[$i]] -= 1;
                        $tempLen++;
                    } else {
                        $tempLen = 0;
                        break;
                    } 
                } else {
                    $tempLen = 0;
                    break;
                } 
            }

            $lenWords += $tempLen;
            unset($cloneCharsMap);
            unset($tempLen);
        }

        return $lenWords;
    }
}
?>