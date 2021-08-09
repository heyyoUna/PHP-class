<pre>
<?php

for($i=1; $i<10; $i++) {
    $br[] = $i*$i;
}
array_push($br, 100, 101);

echo json_encode($br); //encode：轉換成json字串

echo '<br>-------------------<br>';

$ar = [
    'name' => 'David',
    'age' => 23,
    'gender' => 'male',
    'address' => '台灣/高雄',
];
echo json_encode($ar); 
// 對應的是json的abject
// \u代表unicode；
// \u53f0代表一個中文字，53f0此四位數代表16進位數的編碼(unicode字碼)
echo '<br>-------------------<br>';


echo json_encode($ar, JSON_UNESCAPED_UNICODE); 
// JSON_UNESCAPED_UNICODE： 中文字json不要跳脫成unicode
echo '<br>-------------------<br>';

echo json_encode($ar, JSON_UNESCAPED_SLASHES); 
// JSON_UNESCAPED_SLASHES：slashes不要跳脫成unicode
echo '<br>-------------------<br>';

echo json_encode($ar, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES); 
// 同時設定不跳拖中文字＆ slashes，在中間加'+' 或是'|' (位元運算值的or)
echo '<br>------------------<br>';




?>
</pre>