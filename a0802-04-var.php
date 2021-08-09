<h2>
<?php
// $name = 'Peter';

$a = 66;
$b = '22';
$c = 'hi';

echo $a + $b; //b自動被轉為數值
echo '<br>';
echo $a * $b; //b自動被轉為數值
echo '<br>';


echo $c + $b; 
echo '<br>';
echo $c * $b;
echo '<br>';
//因為c不能直接轉換為數值，所以會跳warning ->
// Warning: A non-numeric value encountered in /Applications/XAMPP/xamppfiles/htdocs/test/a0802-04-var.php on line 15


echo intval($c) + intval($b);  //intval()轉換為整數
echo '<br>';
echo intval($c) * intval($b);
echo '<br>';


echo intval($c) + $b;
echo '<br>';
echo intval($c) * $b;
echo '<br>';

//警示嚴重程度 error > warning > notice

$n = 'name';
$$n = 'Una'; //以變數值為名的變數
echo $name;


?>
</h2>
    