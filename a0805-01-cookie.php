<?php
 //設定cookie，要在所有html內容之前
 //其實是設定response headers 檔頭
 setcookie('my_cookie', '1')
 

?>


date_default_timezone_set('Asia/Taipei');

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?= isset($_COOKIE)
</body>
</html>