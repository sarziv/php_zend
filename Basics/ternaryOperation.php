<?php
//Ternary operation
$a = 4;
$b = ($a == 8) ?  "Yes its 8".PHP_EOL :  "NOT 8".PHP_EOL;
echo $b;

//is the same as
if($a == 8 ){
    echo "Yes its 8";
}else{
    echo "NOT 8";
}
