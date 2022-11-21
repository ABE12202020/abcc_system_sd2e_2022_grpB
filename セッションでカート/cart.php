<?php
require "component.php";
// 買い物カゴに入れたとき
$array[] = [
    "prodact_name" => $_POST["prodact_name"],
    "num" => $_POST["num"]
];

//買い物カゴが空ではないとき
if(isset($_SESSION["cart"])){
    $array=$_SESSION["cart"];
    //商品の追加
    //商品と数量がPOSTされたとき
    if(isset($_POST["product_name"]) && isset($_POST["num"])){
        $array[$index]["num"] += $_POST["num"];
        //異なるカゴに入ったとき
    }else{
        $array[] = [
            "product_name" => $_POST["num"],
            "num" => $_POST["num"]
        ];
    }
}

?>
<!doctype html>
<html lang="ja">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, shoping!</title>
  </head>
  <body>
  <div class="couneainer text-center">

   <div class="couneainer text-center">
    <h1>Hello, shoping!</h1>

    <!-- 商品の名前と個数をカート画面に出力 -->
    <?php
    foreach($array as $key => $value){
        echo "<div class = 'row mt -2'>";
                echo "<div class ='row col -3'>";
                echo "<h3>".$value['product_name']."</h3>";
                echo "<h4>数量:".$value['num']."</h4>";

                //商品名のカラムのみを検索
                $array_product_name = array_column( $product, "product_name");
                if(in_array($value['product_name'],$array_product_name){
                     //echo "array_colomuで検索多少のindexを取得";
                     $index = array_search($value['product_name'],$array_product_name);
                     echo $index;
                     $price = $product[$index]["price"];
                     $img = $product[$index]["img"];
                     echo "<div><img src=./".$img "class ='img = fluid' style = 'width:120px; hight:aout;'></div>";
                     echo "<div>単価:".

                })


                echo "</div>\n";
        echo "<?div>";
    }
    ?>
    <div><a href="shoping.php" class="h3">買い物を続ける</a></div>
</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
   </div>
  </body>
</html>
