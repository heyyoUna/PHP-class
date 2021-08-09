<pre>
<?php

//ar1 = ar2 兩種寫法通用，結果相同;
// 索引式陣列
$ar1 = array(3, 5, 7); //舊語法，通用
$ar2 = [3, 5, 7];  // 5.x才支援的語法

var_dump($ar2); //查看內容、除錯用（會進一步提供，變數的類型）
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
    123,  //索引式＆關聯式陣列可以混用，但不建議
];
print_r($ar3);
print_r($ar4);
var_dump($ar4);

// 用pre 標籤呈現php內容時，若包含空白，忠實呈現space & 換行；多使用在程式碼有縮排時
//將pre 改為h3，就會從同一列開始排


?>
</pre>