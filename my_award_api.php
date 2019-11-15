<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./css/main.css">
    <title>當月兌獎號</title>
</head>
<body>
<?
include_once("base.php");

$data=$_POST['year'];
$period=$_POST['period'];
$rows=selectFA('award',$period); 
?>
<table>
    <tr>
        <td>特別獎</td>
        <td><? echo $rows['sp1']?></td>
        <td>1000萬元</td>
    </tr>
    <tr>
        <td>特獎</td>
        <td><?echo $rows['sp2']?></td>
        <td>200萬元</td>
    </tr>
    <tr>
        <td>頭獎</td>
        <td><?echo $rows['jackpot1']?></td>
        <td><?echo $rows['jackpot2']?></td>
        <td><?echo $rows['jackpot3']?></td>
        <td>20萬元</td>
    </tr>
    <tr>
        <td>二獎</td>
        <td>與頭獎中獎號碼末7位相同</td>
        <td>4萬元</td>
    </tr>
    <tr>
        <td>三獎</td>
        <td>與頭獎中獎號碼末6位相同</td>
        <td>1萬元</td>
    </tr>
    <tr>
        <td>四獎</td>
        <td>與頭獎中獎號碼末5位相同</td>
        <td>4千元</td>
    </tr>
    <tr>
        <td>五獎</td>
        <td>與頭獎中獎號碼末4位相同</td>
        <td>4千元</td>
    </tr>
    <tr>
        <td>六獎</td>
        <td>與頭獎中獎號碼末4位相同</td>
        <td>4千元</td>
    </tr>
    <tr>
        <td>增開六獎</td>
        <td><?echo $rows['six3']?></td>
        <td><?echo $rows['six2']?></td>
        <td><?echo $rows['six1']?></td>
    </tr>
</table> 
    <div class="content">
        <a href="#" onclick="loadpage('index.html')" >開始兌獎</a>
    </div>
</body>
</html>

