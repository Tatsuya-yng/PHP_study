<?php
//　変数　＄a　に　３　を代入
$a = 3;

// 変数　$b　に　７　を代入
$b = 7;

//　変数　$a を出力
echo $a + $b; 
echo "\n";





//　変数　＄array_month　に　配列　[1月, 2月, 3月, 4月, 5月, 6月, 7月, 8月, 9月, 10月, 11月, 12月] を代入する
$array_month = ['1月', '2月', '3月', '4月','5月', '6月', '7月', '8月', '9月', '10月', '11月', '12月'];
// $array_month から　8月　を取り出して表示する
echo $array_month[7];
echo "\n";
// => 8月　と表示される



$hello = "Hello";
$name = "田中達也";
$world = "'s World!";
echo $hello . $name . $world . "\n";



$tech_boost = "tech";
$tech_boost .= " boost";
echo $tech_boost . "\n";



$calendar_2018 = array(
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
    "December" => "12月",
);
// 12月を表示する
echo $calendar_2018["December"] . "\n";