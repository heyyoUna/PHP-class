<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?= isset($_COOKIE['my_cookie']) ? $_COOKIE['my_cookie'] : '' ?> 

<!-- cookie的設定，可以跨頁面，在01檔案設定，在02檔案讀取；
在檢查的application 可以清掉cookie；
session (n.) 一段時間(會議/集會);
在cookie expires的session指，現在開一個頁面，如果關機或關閉瀏覽器，此session即結束-->
    
</body>
</html>