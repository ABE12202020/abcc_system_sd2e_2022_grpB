<?php
//「DBManager.php」ファイルを読み込む
require_once 'cart_1_abe.php';

//DBManagerをnewする
$dbm = new cart_1_abe();

$aaa='01';

$userList=$dbm->getUserTblByIdAndPass($aaa);
$yeah;
echo $userList;
foreach($userList as $row){
    $yeah  =  $row['shohin_name'];
}
$getCnt=count($yeah);

if($getCnt>=1){
    echo "<h2>$yeah</h2>";
}else{
    echo "<h2>ログインに失敗しました</h2>";
}
?>