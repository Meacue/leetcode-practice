<?php
class Solution {

    /**
     * @param String[] $words
     * @param Integer $maxWidth
     * @return String[]
     */
    public $words = ["This", "is", "an", "example", "of", "text", "justification."];
    public $maxWidth = 16;

    /*
    Output:
    [
        "This    is    an",
        "example  of text",
        "justification.  "
    ]
    */

    function fullJustify($words, $maxWidth) {
        
        $output = [];
        $line = "";
        $lines = [];
        $arrLine = [];
        $newLine = "";

        $numbSpaces = 0;
        $spaces = [];
        $lastWordIndex = count($words) - 1;
       
        $currentLenLine = 0;
        $wentOutOfLine = false;

        for ($i = 0; $i <= $lastWordIndex; $i++) {

            $currentLenLine += strlen($words[$i]);

            if ($currentLenLine <= $maxWidth) {
                
                if ($currentLenLine + strlen($words[$i + 1])  > $maxWidth) {
                    $wentOutOfLine = true;
                } else {
                    $wentOutOfLine = false;
                }
                $line .= $words[$i];
                $arrLine[] = $words[$i];
                if ($i == $lastWordIndex) {
                    $numbSpaces = $maxWidth - strlen($line);
                    $spaces[] = $numbSpaces;

                    $lines[] = $arrLine;
                    unset($currentLenLine);
                }
            } else {
                $currentLenLine -= strlen($words[$i]);
                $numbSpaces = $maxWidth - strlen($line);
                $lines[] = $arrLine;
                $spaces[] = $numbSpaces;

                unset($currentLenLine);
                unset($line);
                unset($arrLine);

                if ($i == $lastWordIndex) {
                    $line .= $words[$i];
                    $arrLine[] = $words[$i];
                    $lines[] = $arrLine;
                    $numbSpaces = $maxWidth - strlen($words[$i]);
                    $spaces[] = $numbSpaces;
                    unset($currentLenLine);
                }
                $currentLenLine += strlen($words[$i]);
                $wentOutOfLine = false;
                $line .= $words[$i];
                $arrLine[] = $words[$i];
            }
            if ($wentOutOfLine == false) {
                $currentLenLine++;
            } 
        }
        
        $extraSpace = 0;
        $countedSpaces = 0;
        
        for ($i = 0; $i <= count($lines) - 1; $i++) {
            $wordsInLineWithoutLast = count($lines[$i]) - 1;
            for ($j = 0, $countWords = count($lines[$i]) - 1; $j <= $countWords; $j++) {
                if ($i == (count($lines) - 1) && !($countWords == $j)) {
                    $newLine .= $lines[$i][$j]." ";
                    $countedSpaces++;
                    $wordsInLineWithoutLast--;
                    continue;
                }
                if ($wordsInLineWithoutLast == 0) {
                    $newLine .= $lines[$i][$j].str_repeat(" ", $spaces[$i] - $countedSpaces);
                    continue;
                }

                $extraSpace = ceil(($spaces[$i] - $countedSpaces) / $wordsInLineWithoutLast);

                $newLine .= $lines[$i][$j].str_repeat(" ", $extraSpace);
                $wordsInLineWithoutLast--;
                $countedSpaces += $extraSpace;

            }
            $output[] = $newLine;
            unset($newLine);
            unset($extraSpace);
            unset($countedSpaces);
        }

        return $output;
    }
}
?>