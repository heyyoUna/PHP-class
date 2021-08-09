<pre>
<?php

for($i=1; $i<10; $i++) {
    $br[] = $i*$i;
}
array_push($br, 100, 101);

foreach($br as $v){
    echo "$v <br>";  }
// foreach 迴圈的敘述
// $v 為自定義變數，用他拿到$br內部的值
 
echo '-------------------<br>';

$ar = array(
    123,
    'name' => 'David',
    'age' => 23, 
    'gender' => 'male',
    'hello'   //原則上不要混用索引式、關聯式
);
//array() = []

foreach($ar as $k => $v){
    echo "$v <br>";}
// foreach 也可使用在關聯式陣列

echo '-------------<br>';


foreach($ar as $key => $value){
    echo "$key => $value <br>";}
// $key & $value 都是自定義變數
//沒有key值的孩子，將依順序，用從0開始的數字補上

echo '-------------<br>';

echo count($ar); 
//count 找出陣列的長度；此處混用索引式、關聯式，在foreach迴圈下也會將關聯式陣列納入計算(反之，for不會)
//盡量不要混用索引式、關聯式!!
//php陣列，建議使用foreach減少for






?>
</pre>