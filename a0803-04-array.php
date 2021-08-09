<pre>
<?php

//ar1 = ar2 兩種寫法通用，結果相同
$ar1 = array(3, 5, 7); //舊語法，通用
$ar2 = [3, 5, 7];  // 5.x才支援

var_dump($ar2); //查看內容、除錯用（更詳細）
print_r($ar2);  //查看內容、除錯用


$arx = ['apple', 'water', 'cofee'];
var_dump($arx);
print_r($arx);



//關聯式陣列
$ar3 = array(
    'name' => 'David',
    'age' => 23,
);
$ar4 = [
    'name' => 'David',
    'age' =>23,
];
print_r($ar3);
print_r($ar4);




?>
</pre>