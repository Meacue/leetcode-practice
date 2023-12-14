<?php 
class Solution {

    /**
     * @param Integer $n = 2
     * @return Integer 2
     */
    public $n = 2;

    function climbStairs($n) {

        if ($n < 3) {
            return $n;
        }

        $fibSum = 0;
        $fib1 = 1;
        $fib2 = 2;

        $i = 0;

        while ($i < $n - 2) {
            $fibSum = $fib1 + $fib2;
            $fib1 = $fib2;
            $fib2 = $fibSum;
            $i++;
        }

        return $fib2;
    }
}
?>