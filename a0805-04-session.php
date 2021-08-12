<?php 
session_start();    //啟用session

if(! isset($_SESSION['num'])){  //! 代表not
    $_SESSION['num'] = 1;
} else {
    $_SESSION['num'] ++;
}

// 預設情況下，session 是關閉的，減少消耗資源 
// 跟cookie一樣，設定在檔頭，因此要放在html前面
// cookie的值，只能是字串；但session沒有限定類型(可以是數值、陣列等)
?>＝

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?= $_SESSION['num'] ?>

</body>
</html>

<!-- 每次重新整理，都會再加1；使用無痕或是其他瀏覽器，就會再從１開始 -->
