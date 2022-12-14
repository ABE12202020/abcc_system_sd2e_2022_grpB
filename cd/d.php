<!doctype html>
<html lang="ja">
  <head>
    <style>
    body{
      padding: 50px 0px;
    }
      </style>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- <link href="css/style.css"rel="stylesheet"type="text/css"> -->

    <title>商品詳細</title>
  </head>
  <body>
<nav class="navbar navbar-expand-md navbar-dark fixde-top" aria-label="Fourth navbar example" style="background-color: #FF9933;">
    <div class="container-fluid">
      <a class="navbar-brand" href="#"><img src="../img/rogo_u.png" width="20%"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExample04">
        <ul class="navbar-nav me-auto mb-2 mb-md-0">
          <li class="nav-item">
            <!-- <a class="nav-link active" aria-current="page" href=""><font size="5">トップ</font></a> -->
          </li>
          <li class="nav-item">
            <a class="nav-link" href="login_complete.html"><font size="5">ログアウト</font></a>
          </li>
        </ul>
        <form role="search">
          <input class="form-control" type="search" placeholder="レシピを検索" aria-label="Search">
        </form>
      </div>
    </div>
  </nav>
  <br>

<?php
//db接続
$dsn = 'mysql:dbname=LAA1418543-bteam;host=mysql208.phy.lolipop.lan;charset=utf8';
$user = 'LAA1418543';
$password = 'Baiueo1234';
$dbh = new PDO($dsn,$user,$password); 
//sql実行
$sql = 'SELECT * FROM shohins WHERE shohin_id = ?';
$stmt=$dbh->prepare($sql);
$stmt->execute([$_REQUEST['id']]);


foreach($stmt->fetchAll() as $row) {
  echo '<div style="text-align:center;">';
  //名前ok
    //echo '<div class="textimg">';//center
    echo '<img src="../img/'.$row['picture_pass'].'" width="420" height="350" class="rounded">';
    //echo '<p><img src="./img/'.$row['picture_pass'].'"></p>'; 
  //--------------------------------------------------------------------  
    echo '<form action="./cart3.php" method="post">';  
  //商品名:
    echo '<p><h1 style="text-align:center">'.$row['shohin_name'].'</h1></p>';
  //echo '<p><h1>'.$row['shohin_name'].'</h1></p>'; 
  //------------------------------------------------------------------------
    echo '<p>価格:'.$row['shohin_price'].'円</p>'; 
  //商品情報

    echo '<div name="main" class="container">';
    echo '<div class="row">';
    echo '<div class="col-lg-1"></div>';
    echo '<div class="col-lg-5">'; 
    echo '<div class="card">'; 
    echo '<div class="card-body">';
    echo '<h5 class="card-title text-warning">商品情報<br>—————————————————————</h5>';
    echo '<dl class="text-dark text-left">';
    echo '<p>説明:<br>'.$row['shohin_ex'].'</p>'; 
    echo '</dl>';
    echo '</div>';
    echo '</div>';
    echo '</div>';
  //--------------------------------------------------------------------
  //配送
    echo '<div class="col-lg-5">'; 
    echo '<div class="card">'; 
    echo '<div class="card-body">';
    echo '<h5 class="card-title text-warning">配送について<br>—————————————————————</h5>';
    echo '<dl class="text-dark text-left">';
    echo '<dt>送料</dt><dd>	値段／件<br> ※送料は商品ごとにかかります。<br> ※配送先によって送料が異なる可能性があります。</dd>
          <dt>配送業者</dt><dd>	佐川急便（沖縄県・離島のみヤマト運輸）</dd>
          <dt>配送可能地域</dt><dd>全国</dd>';
    echo '</dl>';
    echo '</div>';
    echo '</div>';
    echo '</div>';
    //echo '</div>';//center
  //----------------------------------------------------------------------
    echo '<p>個数:<select name="count">';
    echo  '</div>';
    for($i=1; $i<=10; $i++) {
        echo '<option value="'.$i.'">'.$i.'</option>';
}
    echo '</select></p>';
    echo '<input type="hidden" name="id" value="'.$row['shohin_id'].'">';
    echo '<input type="hidden" name="name" value="'.$row['shohin_name'].'">'; 
    echo '<input type="hidden" name="price" value="'.$row['shohin_price'].'">'; 
   // echo '<button formaction=catalog.php class='btn btn-warning btn-lg text-white'>商品詳細</button>';
    echo '<p><input type="submit" value="カートに追加"></p>';
    echo '</form>';
}
session_start();
$_SESSION['buy_id']=$_REQUEST['id'];
$_SESSION['kosu']=$count;
//echo '<a href="http://fancy-naha-9512.noor.jp/catalog.php">戻る</a>'
echo '<a href="http://fancy-naha-9512.noor.jp/catalog.php"><button class="btn btn-warning btn-col-mdd-10 p-10 text-white text-center" >商品一覧</button>';
?>
   
  </body>
</html>



?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>


