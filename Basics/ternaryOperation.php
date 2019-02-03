<?php
//Ternary operation
$a = 8;
$b = ($a == 8) ? "Yes its 8" . PHP_EOL : "NOT 8" . PHP_EOL;
echo $b;

//is the same as
if ($a == 8) {
    echo "Yes its 8\n";
} else {
    echo "NOT 8\n";
}
//if - elseif -  else
$result = $a == 5 ? "Yes an 5\n" : ($a == 8 ? "It's a 8 \n" : "No idea what is it.");
echo $result;

//null coalescing operator
//$z = 4;
//Perfect for testing user login settings, etc.
//test if $z exist YES -> echo $z NO -> echo No variable message.
$resultZero = $z ?? "No variable\n";
echo $resultZero;

//Spaceship
//Cons: for sorting and callbacks
//Returns 0,-1,1
echo "SPACESHIP " .PHP_EOL;
echo 1 <=> 2; //-1
echo  PHP_EOL;
// It can compare strings,
echo'a' <=> 'z'; // -1
echo  PHP_EOL;
// and arrays,
echo[2, 1] <=> [2, 1]; // 0
echo  PHP_EOL;
// nested arrays,
echo[[1, 2], [2, 2]] <=> [[1, 2], [1, 2]]; // 1
echo  PHP_EOL;
// and even casing.
echo'Z' <=> 'z'; // -1