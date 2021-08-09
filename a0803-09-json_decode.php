<pre>
<?php

$str = '{"name":"David","age":23,"gender":"male","address":"\u53f0\u7063\/\u9ad8\u96c4"}';
//上列str內容，從08檔案的結果擷取
//encode:轉換成json陣列；decode解析字串至陣列
$obj = json_decode($str); //轉換為php object
$ar = json_decode($str, true);  //轉換為關聯式陣列

//json-decode內可放字串、數值、布林(此處叫associative)
//當associative是true，會回傳關聯式陣列(associative arrays)；當associative是false，會回傳objects
//回傳預設是objects


print_r($obj);
echo'<br>-------<br>';
print_r($ar);
echo'<br>-------<br>';

echo $obj -> name; //物件的屬性
echo'<br>-------<br>';
echo $ar['name']; //陣列的元素值





// stdClass: std代表standard

// $ar = [
//     'name' => 'David',
//     'age' => 23,
//     'gender' => 'male',
//     'address' => '台灣/高雄',
// ];


?>
</pre>