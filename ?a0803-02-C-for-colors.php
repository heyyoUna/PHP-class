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
    <?php 
    for($i=0; $i<16; i++){
        <tr>
            for ($i=0; $i <16 ; $i++) { 
                <td style="background-color: #<?= sprintf("%x%x00%x%x",$i, $i, $k, $k)?>;"></td>
            } 

        </tr>
        
    
    }
    ?>
</table>

</body>
</html>


<!--??? 在影片2021 08 03 09 01 26 19:45說，
可以整個table只用一段php包，但tr & td需要加上echo，how?-->