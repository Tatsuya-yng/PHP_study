<?php
$height = 160;
// もし　$height が　150 未満の数値なら、{ } の中が実行される
if ($height < 150) {
 echo "150㎝　未満の方はご乗車できません。";
 }
 
$height = 160;
//　もし $height が150　未満の数値なら、ifのあとの　{ }の中のコードが実行される
//　それ以外なら、　else のあとの　{ } の中のコードが実行される
if ($height < 150) {
    echo "150㎝　未満の方はご乗車できません。";
} else {
    echo "ご乗車になれます。";
}
    echo "\n";
    echo "\n";
    

$height = 230;
// もし $height が 150 未満の数値なら、 ifのあとの { } の中のコードが実行される
// もし $height が 200 以上の数値なら、 else ifのあとの{ }の中のコードが実行される
// それ以外なら、 else のあとの　｛ ｝ の中のコードが実行される
if ($height < 150) {
  echo "150cm 未満の方はご乗車できません。";
} else if ($height >= 200){
  echo "200cm 以上の方はご乗車できません。";
}else {
  echo "ご乗車になれます。";
}
    echo "\n";
    echo"\n";
    
    
$weekday = "月曜";
//$weekday が月曜だったら「可燃ゴミの日です。」、水曜だったら「資源ごみの日です。」、それ以外だったら「回収はありません。」
// と表示される
switch ($weekday) {
 case "月曜";
  echo "可燃ゴミの日です。";
  break;
 case "水曜";
  echo "資源ごみの日です。";
  break;
 default;
  echo "回収はありません。";
  break;
}
 echo "\n";
 echo "\n";
 
$weekday = "月曜";
switch ($weekday) {
    case "月曜";
     echo "可燃ゴミの日です。";
    case "水曜";
     echo "資源ごみの日です。";
    default;
     echo "回収はありません。";
}
 echo "\n";
 echo "\n";
 
$weekday = "木曜";
switch ($weekday) {
    case "月曜";
    case "木曜";
     echo "可燃ゴミの日です。";
     break;
    case "水曜";
     echo "資源ごみの日です。";
     break;
    default;
     echo "回収はありません。";
     break;
}
echo "\n";
echo "\n";
echo "\n";
echo "\n";
echo "\n";

$a = 3;
$b = 3;
$c ="3";

var_dump($a == $b);
echo "\n";
var_dump($a != $b);
echo "\n";
var_dump($a > $b);
echo "\n";

for($i = 0; $i < 10; $i++){
    echo $i;
}
echo "\n";




$total = 0;
echo $total;
echo "\n";
for ($i = 0; $i <= 100; $i++) {
    $total += $i;
}
echo $total;
echo "\n";





$fruits = array("apple", "oreage", "lemon");
echo count($fruits);
echo "\n";
for ($i = 0; $i < count($fruits); $i++) {
    echo "要素は" . $fruits[$i];
    echo "\n";
}

$animals = array("dog", "cat", "panda");
foreach($animals as $animals) {
    echo "要素は" . $animals;
    echo "\n";
}
