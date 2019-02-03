<?php
//Ternary operation
$a = 7;
$b = ($a == 8) ?  "Yes its 8".PHP_EOL :  "NOT 8".PHP_EOL;
echo $b;

//is the same as
if($a == 8 ){
    echo "Yes its 8\n";
}else{
    echo "NOT 8\n";
}
//if - elseif -  else
$result = $a == 5 ? "Yes an 5\n": ( $a  == 8 ? "It's a 8 \n" : "No idea what is it.");
echo $result;