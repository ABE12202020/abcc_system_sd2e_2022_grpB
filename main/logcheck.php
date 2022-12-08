<?php
//「DBManager.php」ファイルを読み込む
require_once 'DBManager.php';
//DBManagerをnewする
$dbm = new DBManager();
$userList=$dbm->getUserTblByIdAndPass($_POST['userid'],$_POST['userpass']);
// $userList=$dbm->getUserTblByIdAndPass(1,"pass1");
$getCnt=count($userList);
if($getCnt>=1){
    // echo '<a href="http://long-usa-8493.mond.jp/test/product_list.html">';
    header('Location: http://long-usa-8493.mond.jp/test/shoping.php');
    exit;
    // location.href = 'http://long-usa-8493.mond.jp/test/product_list.html';
    // echo "<h2>ようこそ！".$userList[0]["user_name"]."さん</h2>";
}else{
    header('Location: http://long-usa-8493.mond.jp/test/login_complete.html');
    exit;
    // echo "	http://long-usa-8493.mond.jp/test/login_2.html";
}

class cart_id{
    public function dbConnect(){
        $pdo = new PDO('mysql:host=mysql208.phy.lolipop.lan; dbname=LAA1418543-bteam; charset=utf8',
                        'LAA1418543', 'Baiueo1234');
        return $pdo;
    }

    //cart_idにプラス１する
        $pdo=$this->dbConnect();
        $sql = "SELECT MAX(cart_id) FROM carts ";
        $ps=$pdo->prepare($sql);
        $ps->bindValue(1, $shohin_id ,PDO::PARAM_STR);
        $ps->execute();
        $result=$ps->fetchAll();
        return $result;
    //↓セレクトでの最大値に＋１してその値をセッションにいれる
?>

