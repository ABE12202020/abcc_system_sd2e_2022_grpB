<!doctype html>
<html lang="ja">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>商品詳細</title>
  </head>
  <body>
    <h1>商品詳細</h1>

<?php
    //lolipop
		// $pdo = new PDO('mysql:host=mysql208.phy.lolipop.lan; dbname=LAA1418543-bteam; charset=utf8',
		// 					'LAA1418543', 'Baiueo1234'); 

    // $pdo = new PDO('mysql:host=mysql208.phy.lolipop.lan; dbname=LAA1418543-bteam; charset=utf8',
    // 'LAA1418543', 'Baiueo1234');

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
    echo '<p><img src="./img/'.$row['picture_pass'].'"></p>'; 
    echo '<form action="carttmp.php" method="post">'; 
    echo '<p>商品名:'.$row['shohin_name'].'</p>'; 
    echo '<p>価格:'.$row['shohin_price'].'</p>'; 
    echo '<p>個数:<select name="count">'; 
    for($i=1; $i<=10; $i++) {
        echo '<option value="'.$i.'">'.$i.'</option>';
}
    echo '</select></p>';
    echo '<input type="hidden" name="id" value="'.$row['shohin_id'].'">';
    echo '<input type="hidden" name="name" value="'.$row['shohin_name'].'">'; 
    echo '<input type="hidden" name="price" value="'.$row['shohin_price'].'">'; 
    echo '<p><input type="submit" value="カートに追加"></p>';
    echo '</form>';
}
?>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>

