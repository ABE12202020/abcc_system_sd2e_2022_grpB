<?php
//「DBManager.php」ファイルを読み込む
require_once 'DBManager.php';

//DBManagerをnewする
$dbm = new DBManager();

$userList=$dbm->getUserTblByIdAndPass($_POST['userid'],$_POST['userpass']);
// $userList=$dbm->getUserTblByIdAndPass(1,"pass1");

$getCnt=count($userList);
if($getCnt>=1){
    // echo "<h2>ようこそ！".$userList[0]["user_name"]."さん</h2>";
     header('Location: ../商品一覧.html');
    
}else{
    echo "<h2>ログインに失敗しました</h2>";
}


?>


<!-- //$userList←DBManagerの「UserTblをIDとパスワードで検索するメソッド」を呼び出す
$POST['userList'];

// もし、検索結果の件数が１以上なら
//     「<h2>ようこそ！[ユーザー名]さん</h2>」とHTMLに書込み
// ちがうなら
//     「<h2>ログインに失敗しました</h2>」とHTMLに書込み

// ?> -->