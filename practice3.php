<?php

function sum($max)
{
    $result = 0;
    for($i = 1; $i <= $max; $i++){
        $result += $i;
    }
    return $result;
}
echo sum(99);

$string = "ABCDEF";
echo strlen($string);

$string = "I love Ruby!";

$new_string = str_replace("Ruby", "PHP", $string);

echo $new_string;

$array = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);
echo count($array);

echo "\n";

$array = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);
echo count($array);

echo "\n";

$array = array(2,5,9,7,1,8,6,4);
asort($array);
print_r($array);

echo "\n";

$array = array(99,150,3,120,999,8,110,23);
arsort($array);
print_r($array);

echo "\n";

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