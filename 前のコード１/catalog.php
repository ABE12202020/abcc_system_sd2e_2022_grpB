<!DOCTYPE html>
<html>

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
<title>商品一覧</title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<meta name="viewport" content="width=device-width, initial-scale=1" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
<style>
.bg-img{
background-image: url("../img/topimage2.jpg");
background-size: cover;
background-position: center 60%;
}

body{
      padding: 50px 0px;
    }

</style>
</head>

<body>

	<nav class="navbar navbar-expand-md navbar-dark fixed-top" aria-label="Fourth navbar example" style="background-color: #FF9933;">
		<div class="container-fluid">
		  <a class="navbar-brand" href="#"><img src="../img/rogo_u.png" width="20%"></a>
		  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		  </button>
	
		  <div class="collapse navbar-collapse" id="navbarsExample04">
			<ul class="navbar-nav me-auto mb-2 mb-md-0">
			  <li class="nav-item">
			  <a class="nav-link" href="login_complete.html"><font size="5">ログアウト</font></a>
			  </li>
			  <li class="nav-item">
				<a class="nav-link" href="#"><font size="5">カート</font></a>
			  </li>

			</ul>
			<form role="search">
			  <input class="form-control" type="search" placeholder="レシピを検索" aria-label="Search">
			</form>
		  </div>
		</div>
	  </nav>
<div name="maindiv" class="container-fluids">
	<div class="bg-img p-5">
		<div class="container">
			<img src="../img/rogo_u.png" class="img-fluid" width="30%">
			<p class="text-white text-center"><br></p>
		</div>
	</div>
	<div class="row mt-2 mb-1">
		<div class="col-12"  style="background-color:#f7a10c;">
			<h2 class="text-center text-white p-1"><i class="bi bi-hand-thumbs-up"></i>おすすめのメニュー</h2>
		</div>
	</div>

	<div class="row p-1 gy-4">

<?php
            $dsn = 'mysql:dbname=LAA1418543-bteam;host=mysql208.phy.lolipop.lan;charset=utf8';
            $user = 'LAA1418543';
            $password = 'Baiueo1234';
            $dbh = new PDO($dsn,$user,$password); 

            $sql = 'SELECT * FROM shohins';
            $stmt = $dbh->prepare($sql);
            $stmt->execute();
			
            foreach($stmt->fetchAll() as $row){
				$id=$row['shohin_id'];
                // echo '<div name="main" class="container">';
                // echo '<div class="row">';
                // echo '<div class="col-lg-1"></div>';
                echo '<div class="col-md-3">'; 
                echo '<div class="card">'; 
                echo '<div class="card-body">';
                echo '<dl class="text-dark text-left">';
                echo '<div class = "col-mdd-10 col-12 p-10">';
                //echo '<div style="text-align: center;"><img src="./img/'.$row['picture_pass'].'"width="320" height="320" class="card-img-top"></a><br>'; 
				echo '<a href="d.php?id='.$id.'"><div style="text-align: center;"><img src="../img/'.$row['picture_pass'].'"width="320" height="320" class="card-img-top"></a><br>';
				//echo '<img src="./img/'.$row['picture_pass'].'" width="420" height="350" class="rounded">';
				//echo '<p><img src="./img/'.$row['picture_pass'].'"></p>';
				//echo '<a href = "d.php?id='.$id.'">'.$row['shohin_name'].'</a>';
                echo '<h1 href = "d.php?id='.$id.'" style="text-align:center">'.$row['shohin_name'].'</h1>';
				echo '<a href="d.php?id='.$id.'"><button class="btn btn-warning btn-col-mdd-10 col-12 p-10 text-white text-center" >商品詳細</button>';
				// echo '<button "" class="btn btn-warning btn-md-12 text-white" href="http://damp-tosu-9116.hippy.jp/d.php">商品詳細</button>';
                echo '</div>';
                echo '</dl>';
                echo '</div>';
                echo '</div>';
                echo '</div>';
            }
?>
	
	</div>
	<!-- <a href="../shosai/shosai'.$row['shohin_id'].'.php">>>詳細へ</a> -->
	

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>