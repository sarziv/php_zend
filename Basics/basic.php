<?php
//test current - end - prev
function fibonacci(array $num)
{

       $x = current($num); /*0*/
       $y = end($num); /*1*/

       $fib=($x+$y);
       array_push($num,$fib);


       while (sizeof($num) < 10){
           fibonacci($num);
       }

    print_r($num);
       exit;


}
fibonacci(array(0,1));
