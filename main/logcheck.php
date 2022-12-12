<?php
    $pdo = new PDO('mysql:host=mysql208.phy.lolipop.lan; dbname=LAA1418543-bteam; charset=utf8',
                            'LAA1418543', 'Baiueo1234');
   //cart_idをautoincriしてuser_idと紐づけcartsにインサート
    $userid2=(String)$_POST['userid'];
        
        $sql = "INSERT INTO `carts`(`user_id`) VALUES (?)";
        $ps=$pdo->prepare($sql);
        $ps->bindValue(1,$userid2,PDO::PARAM_STR);
        $ps->execute();
?>
<?php
        $sql2 = "SELECT MAX(cart_id) FROM carts";
        $ps2=$pdo->prepare($sql2);
        $ps2->execute();
        $cart_id2=$ps2->fetch();
        $cart_id3=$cart_id2['0'];
        session_start();
        $_SESSION['cart_id']=$cart_id3;
        $_SESSION['dami-']=3;
   //cart_idをセッションに入れたい

    
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




 
        // $result=$ps->fetchAll();
        // return $result;
    //↓セレクトでの最大値に＋１してその値をセッションにいれる
?>

