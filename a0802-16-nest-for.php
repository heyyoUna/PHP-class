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
        border: 1px solid grey;
    }
</style>

<body>
<table>
    <?php for($i=1; $i<=9; $i++): ?>

    <tr>
        
    <?php for($k=1; $k<=9; $k++): ?>
        <td><?= sprintf('%s * %s = %s', $i, $k, $i*$k) ?></td>
    <?php endfor ?>

    </tr>

    <?php endfor ?>
</table>

</body>
</html>

