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
        <?php for($i=1; $i<=10; $i++){ ?>
        <tr>
            <td><?php echo $i; ?></td> 
        <!-- ?php echo $i; ? 可簡寫為 ?＝ $i ?(因為$i後面接結束，分號可省略)' -->

            <td><?= "$i * $i =". $i*$i ?></td>
            <!-- 乘號的優先權，會大於點的優先權 -->
        
        </tr>
        <?php } ?>
        <!-- 注意第23 & 32的大括號，若括號沒對準，整個檔案會跑掉；
        開頭可用'：'，結尾用'endfor'替代 -->
    </table>
    
</body>
</html>

