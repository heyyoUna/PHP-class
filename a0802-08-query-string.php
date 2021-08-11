
<?php


$a = isset($_GET['a']) ? intval($_GET['a']) : 0;

// echo $a;

//echo $_GET['a'] ?? '';  //如果沒有設定，使用預設值
//判斷有沒有設定變數(陣列裡的元素)
//有的話 -> intval($_GET['a'])
//沒有的話 -> 0

// echo '<br>';

$b = isset($_GET['b']) ? intval($_GET['b']) : 0;
echo $a + $b;
// GET 透過網址傳値，送出表單後，會把填的資料透過網址傳遞到 PHP 取得資料的程式
// ex. 在網址上，設定a=100, b=50 -> 
//http://localhost/test/a0802-08-query-string.php?a=100&b=50
//將會順利跑出 100, 150




// ?? 就是三元運算子搭配isset()的語法糖
// isset() 同時滿足「變數有被宣告」、「值不是null」，才會回傳true
// isset($a) ? $a : $b; =
//if (isset($a)) {return $a;} else {return $b;} =
// $a ?? $b;