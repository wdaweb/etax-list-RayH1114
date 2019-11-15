<link rel="stylesheet" href="./css/main.css">
<?
include_once("base.php");

$data['year']=$_POST['year'];
$data['period']=$_POST['period'];
$data['Enum']=$_POST['Enum'];
$data['num']=$_POST['num'];
$data['expense']=$_POST['expense'];
// print_r($data);

//判斷是否新增成功;
if(insert("my_receipt",$data)){
   header("location:index.html");
}else{
    echo "新增失敗,請重新輸入";
    echo '<a href="index.html">回到首頁</a>';
}
?>
