<?php
  require "component.php";
  session_start();
?>
<!doctype html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Hell,shoping!</title>
    <style>
        .bg-img{
        background-image: url("../img/topimage 2.jpg");
        background-size: cover;
        background-position: center 60%;
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
				<a class="nav-link active" aria-current="page" href="#"><font size="5">トップ</font></a>
			  </li>
			  <li class="nav-item">
				<a class="nav-link" href="#"><font size="5">お気に入り</font></a>
			  </li>
        <li class="nav-item">
				<a class="nav-link" href="./login_complete.html"><font size="5">ログアウト</font></a>
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
			<img src="../img/rogo b t.png" class="img-fluid" width="30%">
			<p class="text-white text-center"><br></p>
		</div>
	</div>
	<div class="row mt-2 mb-1">
		<div class="col-12"  style="background-color:#f7a10c;">
			<h2 class="text-center text-white p-1"><i class="bi bi-hand-thumbs-up"></i>世界の料理</h2>
		</div>
	</div>

    <div class="couneainer text-center">
    <!-- <h1>世界の料理</h1> -->

<!-- 一覧画面からカートに商品が入っているか確認できる　別にいらん -->
    <strong class="h6 text-danger"><a href="cart.php" class="text-danger"> 買い物かご</a>は、
        <?php
            if( isset($_SESSION[ "cart"]) && count($_SESSION["cart"])>0){          
              echo count($_SESSION[ "cart"]);
              echo "商品が入っています。"; 
            }else{
              echo "空です。";
            }
          ?>   
      </strong> 
<!-- 画像　名前　値段出力 -->
<!-- <for文> -->
<div class="row">
      <?php 
      for($i=0;$i<count($product);$i++){
          ?>
          <div class="col-md-3">
            <form><?php 
              echo "<img src='".$product[$i]["img"]."' class='img-fluid rounded'>";
              echo "<h3>".$product[$i]["product_name"]."</h3>";
              echo "<span class='text-danger'>".number_format($product[$i]["price"])."円</span><br>";
              $format = "<button formaction=%s class='btn btn-warning btn-lg text-white'>商品詳細</button>";
              echo sprintf($format, $product[$i]["url"]);            
              ?></form>
          </div>
      <?php
      }
      ?>

<!-- <div class="row p-1 gy-4"> -->




      



<!-- <div class="col-md-3">
<button type="submit" class="btn btn-primary">商　品　詳　細</button>
</div>
<div class="col-md-3">
<button type="submit" class="btn btn-primary">商　品　詳　細</button>
</div>
<div class="col-md-3">
<button type="submit" class="btn btn-primary">商　品　詳　細</button>
</div> -->


  

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </div>
  </body>
</html>