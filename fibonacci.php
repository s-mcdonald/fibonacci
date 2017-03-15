<?php
    /**
     * A bi-directional fibonacci function
     * This Fib function is seeded with a Zero 
     * starting point, 0 1 1 2 3 5 8 ....
     *
     * @author s.mcdonald
     * @version 1.0
     * @since 5/8/2014
     * @return integer
     */
    function fibonacci(integer $n) : integer {   

        // check seed + exit
        if(($n == 1) || ($n == -1))
            return 1;
        elseif($n == 0)
            return 0;

        //F-n = (-1)n+1 x Fn
        if($n < 0) return pow(-1, $n+1) * fibonacci(abs($n));

        // Fn = Fn-1 + Fn-2 
        return fibonacci($n - 1) + fibonacci($n - 2);

    }
