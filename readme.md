# Fibonacci
In mathematics, the Fibonacci numbers are the numbers in the following integer sequence, called the Fibonacci sequence, and characterized by the fact that every number after the first two is the sum of the two preceding ones -[wikipedia][1]

**Sequence**

    ---------------------------------------------
     F1 | F2 | F3 | F4 | F5 | F6 | F7 | F8 | F3 |
    ----+----+----+----+----+----+----+----+----+
      1 |  1 |  2 |  3 |  5 |  8 | 13 | 21 | 34 |
    ---------------------------------------------
    
 
 This can be expressed mathematically;
 
F<sub>n</sub> = F<sub>n</sub>-1 + F<sub>n</sub>-2 
    
## Zero and Non-Zero starting point
The Fibonacci sequence does not stictly start with a Zero or a One. This is upon implementation. If deciding to initiate the sequence  with a preceeding Zero, then you must first seed the function. 

    F0 = 0
    F1 = 1


**Resulting Sequence**

    ---------------------------------
    F0 | F1 | F2 | F3 | F4 | F5 | F6
    ---+----+----+----+----+----+-----
    0  |  1 |  1 |  2 |  3 |  5 |  8
    ---------------------------------
 


## Bi-directional Fibonacci

As shown on the [wikipedia][2] entry, Fibonacci can also be bidirectional. Reversing (negative Fibonacci) actually requires a slightly different algorithm.


The formula for bi-directional is:

F<sub>-n</sub> = (-1)<sup>*n*+1</sup> x F<sub>n</sub>


Therefore, upon implementation a check is required to see if the inbound parameter is a negative or positive.


The `fibonacci.php` file is my [PHP][3] implementation of  which handles both the standard and bi-directional algorithm.

When implementing the Bi-directional function, I also included the seed for <sub>-1</sub> to yield `1` which is illustrated in the code by the 2 exit points. 

    F-1 = 1

 
The function can be improved further with a rounding function, however I have left it as is for readability.

Take note that the negative Fibonacci numbers do not always yield a negative values when testing.

    
    -----------------------------------------------------------------------
    F−6 | F−5 | F−4 | F−3 | F−2 | F−1 | F0 | F1 | F2 | F3 | F4 | F5 | F6
    ----+-----+-----+-----+-----+-----+----+----+----+----+----+----+------
    −8  |  5  | −3  |  2  | −1  |  1  |  0 |  1 |  1 |  2 |  3 |  5 |  8
    -----------------------------------------------------------------------
    
    
  [1]: https://en.wikipedia.org/wiki/Fibonacci_number
  [2]: https://en.wikipedia.org/wiki/Fibonacci_number#Negafibonacci
  [3]: http://php.net/