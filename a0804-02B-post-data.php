
<?php

header('Content-Type: application/json');
// 可以設定回應給用戶端的檔頭
// header檔頭須至於body前面

 
$a = isset($_POST['a']) ? intval($_POST['a']) : 0;
$b = isset($_POST['b']) ? intval($_POST['b']) : 0;


echo json_encode([
    'postData' => $_POST,
    'result' => $a + $b,
]);

