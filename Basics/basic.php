<?php
//test current - end - prev
function fibonacci(array $num)
{

       $x = current($num); /*0*/
       $y = end($num); /*1*/

       $fib=($x+$y);
       array_push($num,$fib);
       print_r($num);
       fibonacci($num);

}
fibonacci(array(0,1));
