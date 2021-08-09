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
            <td><?php printf('&nbsp;%s * %s = %s&nbsp;', $k, $i, $k*$i) ?></td>

            <!-- sprintf 回傳字串，printf會輸出字串；
            ?= 代表php echo，若搭配printf，在echo的作用下，會在結尾補上字元長度的數值(等號前面的空格也算)；
            排版考量，透過&nbsp;加上空格  -->
            <?php endfor ?>
        
        </tr>
        <?php endfor ?>
    </table>
    
</body>
</html>

