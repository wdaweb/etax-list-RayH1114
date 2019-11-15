<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>查詢中獎發票</title>
    <link rel="stylesheet" href="./css/main.css">
</head>
<body>
    <?
    include_once("base.php");
    $my_receipt=SELECTall('my_receipt');
    $award=SELECTall('award');
    // $selectPeriod=selectPeriod('award')
    // print_r($my_receipt);
    // print_r($award);
    ?>  
    <table>
         <tr>
             <td>年分</td>
             <td>
                 <select name="year" id="year">
                 <option value="2019">2019</option>
                </select>
             </td>
             <td>月份</td>
             <td><select name="period" id="period">
                 <option value="1">1-2月</option>
                 <option value="2">3-4月</option>
                 <option value="3">5-6月</option>
                 <option value="4">7-8月</option>
                 <option value="5">9-10月</option>
                 <option value="6">11-12月</option>
             </select>
             
             </td>
         </tr>
    </table>
        <input type="submit" value="兌獎">
  </table>  

</body>
</html>