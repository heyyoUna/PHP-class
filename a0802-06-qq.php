<h2>
<?php

$name = false;

echo $name ?? 'noname'; //name沒有宣告 -> 沒有東西
//php 7 以上的版本，支援問號的三元運算子
// js 在相同情況下，當前面是空的，會把後面的noname丟出來; 反之，若前面有內容，就會忽略後面

// ?? 就是三元運算子搭配isset()的語法糖
// isset() 同時滿足「變數有被宣告」、「值不是null」，才會回傳true
// isset($a) ? $a : $b; =
//if (isset($a)) {return $a;} else {return $b;} =
// $a ?? $b;



?>
</h2>
    