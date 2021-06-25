<?php

$num = range(start: 10,end: 100,step: 10);
print '<pre>';

print_r($num);

print '</pre>';




function sum(int $x, int $y){
    $z = $x + $y;
    return $z;

}

echo "5 + 10 = " . sum(5,10) . "<br>";

echo "6 + 10 = " . sum(6,10) . "<br>";

echo "5 + 40 = " . sum(5,10) . "<br>";



?>