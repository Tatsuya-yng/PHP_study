<?php
$name = 田中達也;
if ($name < 佐藤達也); {
    echo "あなたの名前ではありません。";
}
    echo "\n";
    
    
    

$a = 0;
    echo $a;
    echo "\n";

for ($b = 0; $b <= 10000; $b++) {
    $a += $b;
}
    echo $a;
    echo "\n";
    



$fruits = array("apple", "chrry", "banana", "grape", "melon");
foreach($fruits as $fruits){
    echo "好きな順" . $fruits;
    echo "\n";
}



/* for文の始めの値を定義する*/
$start = 1;
/* for文の終わりの値を定義する */
$end = 100;

for($i = $start; $i <= $end; $i++) {
    if($i % 5 == 0) {
    echo $i;
    echo "\n";
}
// 5で割り切れたら{}内を実行する
}
    