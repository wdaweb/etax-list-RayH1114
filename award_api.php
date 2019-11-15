<link rel="stylesheet" href="./css/main.css">
<?
include_once("base.php");

$data['year']=$_POST['year'];
$data['period']=$_POST['period'];
$data['sp1']=$_POST['sp1'];
$data['sp2']=$_POST['sp2'];
$data['jackpot1']=$_POST['jackpot1'];
$data['jackpot2']=$_POST['jackpot2'];
$data['jackpot3']=$_POST['jackpot3'];
$data['six1']=$_POST['six1'];
$data['six2']=$_POST['six2'];
$data['six3']=$_POST['six3'];
// print_r($data);

//判斷是否新增成功;
if(insert("award",$data)){
    echo "新增成功";
    header("location:index.html");


}else{
    echo "新增失敗,請重新輸入";
    echo '<a href="index.html">回到首頁</a>';

}
?>
