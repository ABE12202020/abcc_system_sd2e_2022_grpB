<?php
//商品詳細を押すと、その画面の商品idが送られる。
// $moji=$_POST['aa'];
echo "あいうえお";

//database接続
class cart_test{
    public function dbConnect(){
        $pdo = new PDO('mysql:host=mysql208.phy.lolipop.lan; dbname=LAA1418543-bteam; charset=utf8',
                        'LAA1418543', 'Baiueo1234');
        return $pdo;
    }

    //data照合
    public function getUserTblByIdAndPass($shohin_id){
        $pdo=$this->dbConnect();
        $sql = "SELECT shohin_name FROM shohins WHERE shohin_id = ? ";
        $ps=$pdo->prepare($sql);
        $ps->bindValue(1, $shohin_id ,PDO::PARAM_STR);
        $ps->execute();
        $result=$ps->fetchAll();
        return $result;
    }

    //datebase  Insert
    public function insert($a,$b){
        $pdo=$this->dbConnect();
        $sql= "INSERT INTO cart (cart_id , shohin_id , shohin_quanity) VALUES ('999' , ? ,'1')";
        $ps = $pdo->prepare($sql);
        // $ps->bindValue(1, $_POST[''] ,PDO::PARAM_STR);
        $ps->bindValue(2, $_POST['buy_id'] ,PDO::PARAM_STR);
        $ps->execute();
    }
}

?>