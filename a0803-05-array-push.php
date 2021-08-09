<pre>
<?php

for($i=1; $i<10; $i++) {
    $br[] = $i*$i; //$br[]相當於array-push；與js不同，不必事先宣告br
}
print_r($br);
echo '<br>'; //換行

array_push($br, 100, 101); //把100 & 101 push 到$br 陣列；call by address 傳址
print_r($br);

echo '<br>'; 
// echo $br; //不要把陣列直接轉換為字串

echo implode('|_|', $br). '<br>'. '<br>'; //implode將陣列組合成字串
//用|_| (自定義)，組合陣列的元素


$str = '1-3-5-7-22';
$ar = explode('-', $str);  //explode將字串切割成陣列
print_r($ar);


?>
</pre>