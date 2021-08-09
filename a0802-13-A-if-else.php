<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
//intval：如果問號前面的參數，有-> 轉換成整數；沒有-> 轉換成0
$age = isset($_GET['age']) ? intval($_GET['age']) : 0;

if ($age >= 18){
    echo '<img src="https://lh3.googleusercontent.com/proxy/__Lb7y0tk1qmi8qyOUv9U9RJrajwmWTY8bmTzv03QLeV2Aip0evzfhR4Lk6dGCPDFP_GDc7uGB7vTzTM6IeCW8LcmucNjOdr1FLlz8epzFROhehK6eg-V-d1dEdXpWuz1K_ttb7hQxt3zlRD5TjY_aPcOGwXwkjZQXY" alt="">';

} else {
    echo '<img src="https://cdn.icon-icons.com/icons2/37/PNG/512/restrictioncoat_restriccion_3689.png" alt="">';
}

?>

<!-- 沒輸入下，age=0；可在網址後面，加上？age=20測試

<img src="https://lh3.googleusercontent.com/proxy/__Lb7y0tk1qmi8qyOUv9U9RJrajwmWTY8bmTzv03QLeV2Aip0evzfhR4Lk6dGCPDFP_GDc7uGB7vTzTM6IeCW8LcmucNjOdr1FLlz8epzFROhehK6eg-V-d1dEdXpWuz1K_ttb7hQxt3zlRD5TjY_aPcOGwXwkjZQXY" alt="">
    
<img src="https://cdn.icon-icons.com/icons2/37/PNG/512/restrictioncoat_restriccion_3689.png" alt=""> -->






</body>
</html>