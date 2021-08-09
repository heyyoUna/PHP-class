<h2>
<?php
$name = 'Peter';

$a = 66;
$b = '22';
$c = 'hi';

echo "$a
+ 
$b 
<br>";  //中間可以換行

echo "$a + $b <br>"; //雙引號可以把變數變成變數值
echo '$a + $b <br>'; //單引號「不」會轉換(忠實呈現XD)
echo $a + $b; echo '<br>';
echo $a + 555; echo '<br>';

//兩種寫法相同
echo "{$a}555 <br>"; 
echo "${a}555 <br>";

echo '$a 555 <br>';
echo "$a 555 <br>";
echo '$a + 555 <br>';
echo "$a + 555 <br>";
echo $a + 555; echo '<br>';

$x = "xyz\nabc\"def\'ghi\\<br>"; 
$y = 'xyz\nabc\"def\'ghi\\<br>';
echo $x;
echo $y;


// \n = 空格
// 在外圍是雙引號，內文中雙引號前一格斜線\，會被去掉；反之，單引號亦同

?>
</h2>
    