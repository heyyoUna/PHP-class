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
        /* collapse(v.)(家具)折疊 All chairs collapse for easy storage. */
    }

    td{
        border: 1px solid grey;
    }
</style>

<body>
    <table>
        <?php for($i=1; $i<=9; $i++): ?>
        <tr>
            <?php for($k=1; $k<=9; $k++): ?>
            <td><?= sprintf('%s * %s = %s', $k, $i, $k*$i) ?></td>

            <!-- sprintf 回傳字串; printf直接輸出字串，兩者用法一樣 -->
            <!-- %s代表字串，用來佔位置，讓後面的資料對齊填入 -->
            <!-- 定義 https://www.php.net/manual/en/function.sprintf.php -->
            <?php endfor ?>
        
        </tr>
        <?php endfor ?>
    </table>
    
</body>
</html>

