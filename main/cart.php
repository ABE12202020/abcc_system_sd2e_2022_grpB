<?php
    require "component.php";
    session_start();
    $_SESSION['cart_id'];
$pdo = new PDO('mysql:host=mysql208.phy.lolipop.lan; dbname=LAA1418543-bteam; charset=utf8',
                            'LAA1418543', 'Baiueo1234');
        $shohin_id2=(String)$_POST['shohin_id'];

        // $sql = "INSERT INTO `cart_details`(`cart_id`,`shohin_id`,`shohin_quanity`) VALUES (?,?,?)";
        // $ps=$pdo->prepare($sql);
        // $ps->bindValue(1,$_SESSION['cart_id'],PDO::PARAM_INT);
        // $ps->bindValue(2,$buy_id,PDO::PARAM_STR);
        // $ps->bindValue(3,$_POST['num'],PDO::PARAM_INT);
        // $ps->execute();
                    
    ?>    

        <div class="couneainer text-center">
        <h1>カート画面</h1>
        <!doctype html>
    <html lang="ja">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <title>Hello, shoping!</title>
    </head>
    <body>
    <nav class="navbar navbar-expand-md navbar-dark" aria-label="Fourth navbar example" style="background-color: #FF9933;">
		<div class="container-fluid">
		  <a class="navbar-brand" href="#"><img src="../img/rogo_u.png" width="20%"></a>
		  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		  </button>
	
		  <div class="collapse navbar-collapse" id="navbarsExample04">
			<ul class="navbar-nav me-auto mb-2 mb-md-0">
			  <li class="nav-item">
				<a class="nav-link active" aria-current="page" href="./shoping.php"><font size="5">トップ</font></a>
			  </li>
			  <li class="nav-item">
				<a class="nav-link" href="#"><font size="5">お気に入り</font></a>
			  </li>
			</ul>
			<form role="search">
			  <input class="form-control" type="search" placeholder="レシピを検索" aria-label="Search">
			</form>
		  </div>
		</div>
	  </nav>
        <?php
        for ($i = 0; $i < count($cart_device_id); $i++) {
            $sql = "INSERT INTO `cart_details`(`cart_id`,`shohin_id`,`shohin_quanity`) VALUES (2,?,3)";
        $ps=$pdo->prepare($sql);
        $ps->bindValue(1,$_SESSION['cart_id'],PDO::PARAM_INT);
        $ps->bindValue(2,$_SESSTION['buy_id'],PDO::PARAM_STR);
        $ps->bindValue(3,$_SESSION['kosu'],PDO::PARAM_INT);
        $ps->execute();



        $sql2 = "SELECT MAX(cart_id) FROM cart_details";
        $ps2=$pdo->prepare($sql2);
        $ps2->execute();
        $cart_details_id2=$ps2->fetch();
        $cart_details_id3=$cart_id2['0'];

        //画像のパスを$pic_passに入れるselect文
        
        $sql3 = "SELECT `picture_pass` FROM `shohins` WHERE shohin_id = ?";
        $ps3=$pdo->prepare($sql3);
        $ps3->bindValue(1,$_SESSTION['buy_id'],PDO::PARAM_STR);
        $ps3->execute();
        $pic_pass3=$ps3->fetch();
        $pic_pass4=$pic_pass3['0'];
    
        //商品の名前を出そう
        $sql4 = "SELECT `shohin_name` FROM `shohins` WHERE shohin_id = ?";
        $ps4=$pdo->prepare($sql4);
        $ps4->bindValue(1,$_SESSTION['buy_id'],PDO::PARAM_STR);
        $ps4->execute();
        $shohin_name2=$ps4->fetch();
        $shohin_name3=$shohin_name2['0'];
        
        //商品の個数を出そう
        $sql5 = "SELECT `shohin_quanity` FROM `cart_details` WHERE shohin_id = ? and cart_id = 2";
        $ps5=$pdo->prepare($sql5);
        $ps5->bindValue(1,$buy_id,PDO::PARAM_STR);
        // $ps5->bindValue(1,$_SESSION['cart_id'],PDO::PARAM_INT);
        $ps5->execute();
        $kosu2=$ps5->fetch();
        $kosu=$kosu2['0'];
        ?>
        <?php
            //販売価格をpriceに入れる
            $price;
            if ($sale_prices[$cart_device_id[$i]] == 0) {
                $price = $default_prices[$cart_device_id[$i]];
            } else {
                $price = $sale_prices[$cart_device_id[$i]];
            }
    //買い物カゴが空ではないとき(cartsとcart_detailsのmaxのcart_idを比較して同じだったら空じゃない)
    if($_SESSION['cart_id']==$cart_details_id3){

echo '<div class="col-sm-4 col-xs-6">';
 echo '<div class="card itiran-card-margin" style="height: 550px; margin-bottom:20px;">';
 echo '<img class="card-img-top itiran-photo-size" src="../img/' . $pic_pass4 . '">';
 echo '<div class="card-body">';
//  echo '<form action="./syosai.php" method="post" name="a_form' . ($cart_device_id[$i] + 1) . '">';
//  echo '<input type="hidden" name="device" value="' . ($cart_device_id[$i] + 1) . '">';
//  echo '<a href="javascript:a_form' . ($cart_device_id[$i] + 1) . '.submit();" style="text-decoration:none;">';
 echo '<p class="card-title text-height" style="flex-grow: 1;">';
 echo $shohin_name3;
 echo '</p>';
 echo '<p>';
//  echo '<span class="star5_rating" data-rate="' . $deviceEvaluationValues[$cart_device_id[$i]] . '"></span>';
 echo '<span style="margin-left: 10px;">' . number_format($kosu) . '</span>';


echo '</p>';
 echo '<span class="text-danger">';
 echo "￥" . number_format($price);
 echo '</span>';
 echo '</a>';
 echo '</form>';
 echo '</div>';
 echo '</div>';
 echo '<span class="text-black">';
 echo "数量：";
 // echo $cart_quantity[$i];
//  echo $hoge = $dbmng->deviceQuantitySearch($cart_device_id[$i] + 1,$_SESSION['cart_id']);
 echo '</span>';
 echo '<span>';
 echo '<form action="./ka-to.php" method="post">';
 echo '<input type="hidden" name="deleteDevice" value="';
//  echo $cart_device_id[$i];
 echo '">';
 echo '<input class="btn btn-warning btn-lg text-dark" type="submit" value="削除">';
 echo '</form>';
 echo '</span>';
 echo '</div>';

 $gokei += $price * $hoge;
}



        // $array=$_SESSION["cart"];
        // //商品の追加
        // //商品と数量がPOSTされたとき
        // if(isset($_POST["product_name"]) && isset($_POST["num"]) ){
        //     $array_product_name = array_column($array,"product_name");
        //     //既に買い物かごに入っているのと、同じ商品がかごに入ったとき
        //     if(in_array($_POST["product_name"],$array_product_name)){
        //         $index = array_search($_POST["product_name"], $array_product_name);
        //         $array[$index]["num"] += $_POST["num"];
        //     //異なる商品がかごに入ったとき
        //     }else{
        //         $array[] = [
        //             "product_name" => $_POST["product_name"],
        //             "num" => $_POST["num"]
        //         ];
        //     }
        // }
            //商品の削除
            //商品名だけがPOSTされたとき
        //     if(isset($_POST["product_name"]) && !isset($_POST["num"]) ){
        //         $array_product_name = array_column($array,"product_name");
        //         //商品を削除る
        //         if(in_array($_POST["product_name"],$array_product_name)){
        //             $index = array_search($_POST["product_name"],$array_product_name);
        //             unset($array[$index]);
        //             $array = array_values($array);
        //         }
        //     }
        //     //買い物かごに初めて商品をいれるとき
        // }else{
        //     $array[] = [
        //         "product_name" => $_POST["product_name"],
        //         "num" => $_POST["num"]
        //     ];
        // }

        //配列セッションに格納
        $_SESSION["cart"] = $array;
    ?>
    

    <!-- <div class="couneainer text-center">

   

        <?php
        $gokei=0;
        foreach($array as $key => $value){
            echo "<div class = 'row mt-2'>";
                echo "<div class ='col-3'>";
                //商品名のカラムのみを検索
                $array_product_name = array_column( $product, "product_name");
                if(in_array($value['product_name'],$array_product_name)){
                    //echo "array_colomuで検索対象のindexを取得<BR>";
                    $index = array_search($value['product_name'],$array_product_name);
                    $price = $product[$index]["price"];
                    // ↓カート画面に出力する画像
                    // $img = $product[$index]["img"];
                    // echo "<div><img src=./".$img."class='img-fluid' style='width:120px; hight:aout;'></div>";
                }
                echo "</div>\n";
                echo "<div class ='col-3'>";
                    //echo $key;
                    echo "<h3>".$value['product_name']."</h3>";
                    echo "<h4 class='text-danger'>".number_format($price)."円</h4>";
                    echo "<h4>数量:".$value['num']."</h4>";
                echo "</div>\n";
                echo "<div class ='col-3' style='dispay:inline-flex;align-items: center;'>";
                ?>

                    <form action="cart.php" class="mt-3" method="post">
                        <input type="hidden" name="product_name" value="<?= $value['product_name'] ?>"> 
                        <button type="submit" class="btn btn-secondary">削除する</button>
                    </form>
                <?php
                echo "</div>\n";
            echo "</div>";

            $gokei += $value['num']*$price;
        }
        echo "<div class = 'h3'>合計金額: ".number_format($gokei)."円</div>";
        ?> -->
        <div><a href="shoping.php" class="h3">買い物を続ける</a></div>
        <button class="btn btn-warning btn-lg text-dark" type="button" onclick="location.href='../商品一覧試作/商品一覧試作.html'"><a href="confirm.html">購入</a></button>
    </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </div>
    </body>
    </html>