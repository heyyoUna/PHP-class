<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    table{
        border-collapse: collapse;
    }

    td{
        width: 30px;
        height: 30px;
        border: 1px solid grey;
    }
</style>

<body>
<table>
    <?php for($i=0; $i<=256; $i+=17): ?>
        <!-- 256=16的平方； i+=17 ->i=i+17 -->

    <tr>

        <td style="background-color: #<?= sprintf('%x', $i) ?>0000;"></td>
        <td style="background-color: #<?= sprintf("%'.02x", $i) ?>0000;"></td>

        <!-- %x 大小寫均可，
        代表16進位 https://www.php.net/manual/en/function.sprintf.php -->

        <!-- 第一列第一格應該要是黑色的，變成#000000，
        但因為都是0，系統自動省略第一個數；
        .02x => 總共要2位數，當數值不夠時，補0; 
        網址Example #2 -->

        <!-- #000000，共6碼，前兩位紅色、中間兩位綠色、後兩位藍色;
        #FF0000 -> red; #000000 ->white; #ffffff -> black;
        色碼邏輯 http://csscoke.com/2015/01/01/rgb-hsl-hex/ -->

    </tr>

    <?php endfor ?>
</table>

</body>
</html>

