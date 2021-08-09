<h2>
<?php


//var_dump 同時印出變數的「值」＆「種類」
$a = 1.2;
var_dump($a); 
echo '<br>';

$product = array('apple', 'banana');
var_dump($product);
echo '<br>';

// 邏輯運算式&關係運算式，兩者的運算結果都是布林值
// && || 優先權比等號要高
var_dump( 7 && 5); 
echo '<br>';
var_dump( 7 and 5); 
echo '<br>';

$b = 7 || 5; 
var_dump($b);
echo '<br>';

// and, or 優先權要比等號低
$x = 7 and 5;
var_dump($x);
echo '<br>';

$y = 7 or 5; 
var_dump($y);
echo '<br>';

$x = (7 and 5);
var_dump($x);
echo '<br>';

$y = (7 or 5);
var_dump($y);
echo '<br>';

?>
</h2>
    