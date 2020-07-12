<?php
echo 'hello php!' . "\n";

$a = 3;
$b = 7;
echo  $a+$b . "\n";

$array = ["1月", "2月", "3月", "4月", "5月", "6月", "7月", "8月", "9月", "10月", "11月", "12月"];
echo $array[7]  . "\n";

$hello = "Hello, ";
$name = "Yosuke Kaneko";
$world = "'s World";
echo $hello . $name . $world . "\n";

$tech_boost = "tech ";
$tech_boost .= "boost";
echo $tech_boost . "\n";

$calendar_2018 = [
  "January" => "1月",
  "February" => "2月",
  "March" => "3月",
  "April" => "4月",
  "May" => "5月",
  "June" => "6月",
  "July" => "7月",
  "August" => "8月",
  "September" => "9月",
  "October" => "10月",
  "November" => "11月",
  "December" => "12月"
];

echo $calendar_2018["December"] . "\n";

$height = 149;
if ($height < 150) {
  echo "150cm 未満の方はご乗車できません。";
} else {
  echo "ご乗車になれます。" . "\n";
}
$height = 199;
if ($height < 150) {
  echo "150cm 未満の方はご乗車できません。";
} else if ($height >= 200){
  echo "200cm　以上の方はご乗車できません。";
}else {
  echo "ご乗車になれます。";
}

$weekday = "月曜日";
switch ($weekday) {
  case "月曜":
   break;
  case "木曜":
   echo "可燃ゴミの日です。";
   break;
  case "水曜":
   echo "資源ごみの日です。";
   break;
  default:
   echo "回収はありません。";
   break;
}
$fruits = array("apple", "orange", "lemon");
  echo count($fruits);
  for ($i = 0; $i < count($fruits); $i++) {
    echo "要素は" . $fruits[$i];
    echo "\n";
}
$a = 3;
$b = 3;
$c = "3";

// $a と $b が等しいときに true　そうでなければ false を返す。
var_dump($a == $b);
//=> bool(true) が表示される。

// $a と $b が等しくないときに true
var_dump($a != $b);
//=> bool(false)　が表示される。

// $a が $b　より大きいときに　true、そうでなければ false を返す。
var_dump($a > $b);
//=> bool(false)が表示される

// $a が $b 以上のときtrue、そうでなければ false を返す。
var_dump($a >= $b);
//=> bool(true) が表示される。

// $a が $b より小さいときtrue、そうでなければ false を返す。
var_dump($a < $b);
//=> bool(false)が表示される

//$a が $b より小さいか、または等しいときに true、そうでなければ false を返す。
var_dump($a <= $b);
//=> bool(true) が表示される。

//$a が $c　とデータ型が等しく、かつ値も等しいときに true、そうでなければ false を返す。
var_dump($a === $c);
//=> bool(false)が表示される。

//$a が $c　とデータ型が等しくないか、もしくは値が等しくないときに true、そうでなければ false を返す。
var_dump($a !== $c);

for($i = 0; $i < 10; $i++){
  echo $i;
}
$total = 0;
echo $total;
//=> 0 と表示される。

// $iが0から始まり、$iが１００以下の間繰り返し処理を行う。
for ($i = 0; $i <= 100; $i++) {
  $total += $i;
}
echo $total;
$animals = array("dog", "cat", "panda");
// $animals から一つずつ要素を取り出して、$animal に代入される

foreach($animals as $animal){
  echo "要素は" . $animal;
  echo "\n";
}