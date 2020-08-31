<?php

function myFuncA($arg)
{
    return $arg*2;
}
echo myFuncA(9);

echo "\n";

function funcB($a, $b)
{
    return $a+$b;
}
echo funcB(2, 4);

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

$array1 = ['apple', 'orange', 'banana', 'kiwi'];
$array2 = ['bike', 'car', 'bicycle', 'kiwi'];
$array5 = array_merge($array1, $array2);
$array3 = 
[
    "apple" => "リンゴ",
    "orange" => "オレンジ",
    "banana" => "バナナ",
    "kiwi" => "キウイ",
];
$array4 = 
[
    "bike" => "バイク",
    "car" => "カー",
    "bicycle" => "バイシクル",
    "kiwi" => "キウイ",
];
$array = array_merge($array3,$array4);

print_r($array);

echo "\n";

print_r($array5);

echo "\n";

$time1 = time();
$time2 = time() + (3 * 24 * 60 * 60);

print_r($time1);
echo "\n";

print_r($time2);
echo "\n";

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
$nweek = time() + (7 * 24 * 60 * 60);
echo date('y/m/d', $nweek);

echo "\n";

$arr = [100, 90, 40, 11, 50, 101];
function max_array($arr)
{
    $max_number = $arr[0];
    foreach ($arr as $a) {
        if($max_number < $a)
        {
            $max_number = $a;
        }
        
    }

    return $max_number;
}

echo max_array($arr);

echo "\n";