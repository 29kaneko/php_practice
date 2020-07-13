<?php

function myFuncA($arg)
{
    return $arg*2;
}
echo myFuncA(9);

echo "\n";

function f($a, $b)
{
    return $a+$b;
}
echo f(2, 4);

echo "\n";

$arr = array(1, 3, 5, 7, 9);
echo "product(arr) = " . array_product($arr);

echo "\n";

$string = '<a href="http://google.com">Google</a>';
$result = strip_tags($string);
echo $result;

echo "\n";

$stack = array("orange", "banana");
array_push($stack, "apple", "raspberry");
print_r($stack);

echo "\n";

$array1 = ['apple', 'orange', 'banana'];
$array2 = ['bike', 'car', 'bicycle'];
$array = array_merge($array1, $array2);

print_r($array);

echo "\n";

$time1 = time();
$time2 = time() + (3 * 24 * 60 * 60);

if($time1 < $time2)
{
    echo '$time2が大きい値です';
}

echo "\n";
$timestamp = mktime(0, 0, 0, 8, 1, 2017);
echo $timestamp;

echo "\n";

echo date('y/m/d', time());
echo '<br>';
$nweek = time() + (7 * 21 * 60 * 60);
echo date('y/m/d', $nweek);

echo "\n";



echo "\n";