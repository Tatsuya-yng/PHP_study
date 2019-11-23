<?php
function sum($a) {
   echo $a * 2;
}
echo sum(10);
echo "\n";


function sum1($a,$b){
    echo $a + $b. "\n";
}
    sum1(5,5);


//$arr という配列の仮引数を持ち、数値が入った配列array(1, 3, 5 ,7, 9) を渡すとその要素をすべてかけた結果を返す関数を作成してください。
function sum2($arr) {
    $result = 1;
    foreach($arr as $a) {
    $result = $result * $a;
    }
    echo $result;
}
    echo sum2(array(1,3,5,7,9)),"\n";
    
    
    
