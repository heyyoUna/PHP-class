<pre>
<?php 


$ar = [
    'name' => 'David',
    'age' => 23,
    'gender' => 'male',
    'address' => '台灣/高雄',
]; //不僅是陣列，也可設定整數

$ar2 = $ar; 
$ar2['name'] = '陳小華';
//在js的邏輯，$ar的參照設定給$ar2，因此兩個變數會指到相同的陣列(設定位址set by reference)
//在php則為，複製新的陣列再指定 (設定值 set by value)

echo json_encode($ar, JSON_UNESCAPED_UNICODE);
echo'<br>-----------<br>';
echo json_encode($ar2, JSON_UNESCAPED_UNICODE);
echo'<br>-----------<br>';


$ar3 = &$ar;  //設定位址(set by address)，把ar指向的位址設定給ar3，因此ar & ar3會指到相同的陣列 (在php不會看到位址的值)
$ar3['name'] = '許大功';

echo json_encode($ar, JSON_UNESCAPED_UNICODE);
echo'<br>-----------<br>';
echo json_encode($ar3, JSON_UNESCAPED_UNICODE);
echo'<br>-----------<br>';


//可以在php自行決定，要設定值or位址；
//在js不可自行決定；遵循類型，基本類型設定值，複雜類型設定參照


?>
</pre>







