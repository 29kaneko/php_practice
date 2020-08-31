<?php

$text = '<p>Test paragraph.</p><!-- Comment --> <a href="#fragment">Other text</a>';
echo strip_tags($text);
echo "\n";

$str = "<p><?php var_dump('string'); ?>テスト<br>テキスト</p>";
echo strip_tags($str);
echo "\n";

$string = '<a href="http://google.com">Google</a>';
$result = strip_tags($string);
echo $result;
echo "\n";

$stack = array("orange", "banana");
array_push($stack, "apple", "raspberry");
print_r($stack);
echo "\n";

$fruits = ['apple', 'orange', 'melon'];
array_push($fruits, 'banana');
print_r($fruits);
echo "\n";

$cars = array("セダン", "ミニバン", "コンパクト");
array_push($cars, "suv", "ワゴン");
print_r($cars);
echo "\n";

$arrayA = ["drink" => "milktea", "coffee", "water"];
$arrayB = ["applejuice", "drink" => "orangejuice"];
$result = array_merge($arrayA, $arrayB);
print_r($result);
echo "\n";

$arrayC = array("color" => "red", 2, 4);
$arrayD = array("a", "b", "color" => "green", "shape" => "trapezoid", 4);
$result = array_merge($arrayC, $arrayD);
print_r($result);
echo "\n";


