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
  </head>
  <body>
    <div class="couneainer text-center">
    <div class="couneainer text-center">
    <nav class="navbar navbar-expand-md navbar-dark" aria-label="Fourth navbar example" style="background-color: #FF9933;">
		<div class="container-fluid">
		  <a class="navbar-brand" href="#"><img src="../img/rogo b t.png" width="20%"></a>
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
				<a class="nav-link" href="#"><font size="5">殿堂入り</font></a>
			  </li>
			  <li class="nav-item">
				<a class="nav-link" href="#"><font size="5">ランキング</font></a>
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
			<h2 class="text-center text-white p-1"><i class="bi bi-hand-thumbs-up"></i>おすすめのメニュー</h2>
		</div>
</div>

    <!-- 一覧画面からカートに商品が入っているか確認できる -->
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

<div class="row">
      <?php 
      for($i=0;$i<5;$i++){
          ?> 
          <div class="col-md-3">
            <?php 
            echo "<img src='".$product[$i]["img"]."' class='img-fluid rounded'>";
            echo "<h3>".$product[$i]["product_name"]."</h3>";
            echo "<span class='text-danger'>".number_format($product[$i]["price"])."円</span>";
            ?>
          
          <form action="cart.php" class="mt-3" method="post">
              <input type="hidden" name="product_name" value="<?= $product[$i]["product_name"] ?>">
              <select name="num">
                  <option value=1>1</option> 
                  <option value=2>2</option>
                  <option value=3>3</option> 
                  <option value=4>4</option>
                  <option value=5>5</option>
              </select>
              <!-- <button type="submit" class="btn btn-primary"><a href="./shoping.php">カート</a></button>  -->
              <button type="submit" class="btn btn-primary">カゴに入れる</button> 
          </form> 
        </div> 
      <?php
      }
      ?>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </div>
  </body>
</html>