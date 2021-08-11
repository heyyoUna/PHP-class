<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?=  ?> 

<!-- 第一次送出後，會顯示undefined，因為cookie僅在我們寫入的response headers，還未寫入request headers(php尚未被設定好)；
第二次(頁面重新整理)，就會出現1，cookie已被帶入request headers。
 -->
    
</body>
</html>