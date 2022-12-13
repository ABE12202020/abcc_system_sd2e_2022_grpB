<?php
session_start();
$pdo = new PDO(
    'mysql:host=mysql208.phy.lolipop.lan; dbname=LAA1418543-bteam; charset=utf8',
    'LAA1418543',
    'Baiueo1234'
);
$shohin_id2 = (string)$_POST['shohin_id'];

$sql9 = "SELECT COUNT( `cart_id` )FROM `cart_details`GROUP BY `cart_id` HAVING MAX( `cart_id` ) ORDER BY `cart_id` DESC";
$ps9 = $pdo9->prepare($sql9);
$ps9->execute();
$cart_detail_count2 = $ps9->fetch();
$cart_detail_count = $cart_detail_count2['0'];

$sql = "INSERT INTO `cart_details`(`cart_id`,`shohin_id`,`shohin_quanity`) VALUES (?,?,?)";
$ps = $pdo->prepare($sql);
$ps->bindValue(1, $_SESSION['cart_id'], PDO::PARAM_INT);
$ps->bindValue(2, $_SESSION['buy_id'], PDO::PARAM_STR);
$ps->bindValue(3, $_SESSION['kosu'], PDO::PARAM_INT);
$ps->execute();



$sql2 = "SELECT MAX(cart_id) FROM cart_details";
$ps2 = $pdo->prepare($sql2);
$ps2->execute();
$cart_details_id2 = $ps2->fetch();
$cart_details_id3 = $cart_details_id2['0'];

//画像のパスを$pic_passに入れるselect文

$sql3 = "SELECT `picture_pass` FROM `shohins` WHERE shohin_id = ?";
$ps3 = $pdo->prepare($sql3);
$ps3->bindValue(1, $_SESSION['buy_id'], PDO::PARAM_STR);
$ps3->execute();
$pic_pass3 = $ps3->fetch();
$pic_pass4 = $pic_pass3['0'];

//商品の名前を出そう
$sql4 = "SELECT `shohin_name` FROM `shohins` WHERE shohin_id = ?";
$ps4 = $pdo->prepare($sql4);
$ps4->bindValue(1, $_SESSION['buy_id'], PDO::PARAM_STR);
$ps4->execute();
$shohin_name2 = $ps4->fetch();
$shohin_name3 = $shohin_name2['0'];

//商品の個数を出そう
$sql5 = "SELECT `shohin_quanity` FROM `cart_details` WHERE shohin_id = ? and cart_id = ?";
$ps5 = $pdo->prepare($sql5);
$ps5->bindValue(1, $_SESSION['buy_id'], PDO::PARAM_STR);
$ps5->bindValue(2, $buy_id, PDO::PARAM_STR);
// $ps5->bindValue(1,$_SESSION['cart_id'],PDO::PARAM_INT);
$ps5->execute();
$kosu2 = $ps5->fetch();
$kosu = $kosu2['0'];

?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Hello, shopping</title>
</head>

<body>
    <div class="couneainer text-center">
        <h1>カート画面</h1>
        <nav class="navbar navbar-expand-md navbar-dark" aria-label="Fourth navbar example" style="background-color: #FF9933;">
            <div class="container-fluid">
                <a class="navbar-brand" href="#"><img src="../img/rogo_u.png" width="20%"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarsExample04">
                    <ul class="navbar-nav me-auto mb-2 mb-md-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="./shoping.php">
                                <font size="5">トップ</font>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <font size="5">お気に入り</font>
                            </a>
                        </li>
                    </ul>
                    <form role="search">
                        <input class="form-control" type="search" placeholder="レシピを検索" aria-label="Search">
                    </form>
                </div>
            </div>
        </nav>
        <?php
        for ($i = 0; $i < $cart_derail_count; $i++) {

            if ($_SESSION['cart_id'] == $cart_details_id3) {
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
        }
        echo "<div class = 'h3'>合計金額: ".number_format($gokei)."円</div>";
        ?> 
        <div><a href="shoping.php" class="h3">買い物を続ける</a></div>
        <button class="btn btn-warning btn-lg text-dark" type="button" onclick="location.href='../商品一覧試作/商品一覧試作.html'"><a href="confirm.html">購入</a></button>
    </div>
    </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </div>
    </div>
    
    </body>
</html>