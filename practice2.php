<?php

$total = 0;
echo $total;
echo "\n";
for ($i = 0; $i <= 10000; $i++) {
    $total += $i;
}
echo $total;

echo "\n";

$name = 'Yosuke Kaneko';
if ($name == 'Yosuke Kaneko') {
    echo "私は 'Yosuke Kaneko' です";
}
else {
    echo "'Yosuke Kaneko'ではありません";
}

echo "\n";

$fruits = array("strawberry", "mellon", "lemon", "apple", "orange");
foreach($fruits as $fruits){
    echo $fruits;
    echo "\n";
}

$start = 1;
$end = 100;

for($i = $start; $i <= $end; $i++){
    if ($i % 5 == 0) {
        echo $i;
        echo "\n";
    }
}    
