<?php
//「DBManager.php」ファイルを読み込む
require_once 'cart_1_abe.php';

//DBManagerをnewする
$dbm = new cart_1_abe();

$userList=$dbm->getUserTblByIdAndPass($shohin_name);

$getCnt=count($userList);

if($getCnt>=1){
    echo "<h2>$userList[0]["shohin_name"]</h2>";
}else{
    echo "<h2>ログインに失敗しました</h2>";
}
?>