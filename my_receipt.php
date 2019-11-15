<!DOCTYPE html>
<html lang="zh-tw">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>我的發票</title>
    <link rel="stylesheet" href="./css/main.css">
</head>
<body>
  <?
  include_once("base.php");
  $rows=SELECTall('my_receipt');
//   print_r($rows)
  
  ?>  
   <table>
    <tr>
        <td>年分</td>
        <td>期別</td>
        <td>發票號碼</td>
        <td>花費</td>
    </tr>
    <?php
        foreach($rows as $my_receipt){
    ?>   
        <tr>
            <td><?=$my_receipt['year'];?></td>
            <td><?=$my_receipt['period'];?></td>
            <td><?=$my_receipt['Enum'];?>-<?=$my_receipt['num'];?></td>
            <td><?=$my_receipt['expense'];?></td>
        </tr>
    <?php
    }
    ?>
</body>

</html>
