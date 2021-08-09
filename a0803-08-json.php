
<?php


$ar = [
    'name' => 'David',
    'age' => 23,
    'gender' => 'male',
    'address' => '台灣/高雄',
];
echo json_encode($ar); 

// 在傳送過程"有"跳脫成unicode，但可透過chrome擴充工具json viewer，看到原始的字串(方便除錯)

//須整份檔案都是json內容，才可啟動chrome外掛

?>
