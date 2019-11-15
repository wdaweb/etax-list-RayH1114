<?
$dsn="mysql:host=localhost;charset=utf8;dbname=receipt";
$pdo=new PDO($dsn,"root","1114");

//把$data的資料新增到資料庫
function insert($table,$data){
    global $pdo;
    $row="`" . implode("`,`",array_keys($data)) . "`";//表單
    $value="'" . implode("','",$data) . "'";//輸入數值
    $sql="insert into $table($row) values($value)";
    return $pdo->query($sql);
    }
//撈出該資料表的所有資料
function SELECTall($table){
    // 回傳整個資料表的內容
    global $pdo;
    $sql="select * from $table ";
    //$rows=$pdo->query($sql)->fetchAll();  //取出全部的資料
    return $pdo->query($sql)->fetchAll();
    }
//取得當前期別資料
    function selectFA( $table,$period){
        global $pdo;
        $sql = "select * from $table where `period`='$period'";
        return $pdo->query($sql)->fetch(); 
    }
//計算有幾筆資料
    function countIN($table, $period){
        global $pdo;
        $sql = "select count(*) as num from $table where `period`=$period ";
        return $pdo->query($sql)->fetch();
    }
//取得某id的所有資料
    function find($table,$period){
        global $pdo;
        $sql="SELECT * FROM $table WHERE period='$period'";
        return $pdo->query($sql)->fetch();
    }
    
//jackpot中獎比對
    function jackpot($value, $award, $Enum, $num){
        for($i= 0; $i< 6; $i++){
            if(substr($value, $i,8-$i) == substr($award, $i,8-$i)){
                switch($i){
                    case 0:
                        $str ="20萬";
                        break;
                    case 1:
                        $str = "4萬";
                        break;
                    case 2:
                        $str = "1萬";
                        break;
                    case 3:
                        $str = "4千";
                        break;
                    case 4:
                        $str = "1千";
                        break;
                    case 5:
                        $str = "2百";
                        break;
                }
                echo "<tr><td>發票號碼：".$Enum."-".$num ."</td><td>".$str."</td></tr>";
                break;
            }
        }
    }
//六獎比對
    function sixAward($value, $award, $Enum, $num){
        if(substr($value, 5, 3) == $award){        
            echo "<tr><td>發票號碼：".$Enum."-".$num ."</td><td>2百</td></tr>";
        }
    }
?>
