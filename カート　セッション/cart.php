<?php
    require "component.php";
    session_start();

    //買い物カゴが空ではないとき
    if(isset($_SESSION["cart"])){
        $array=$_SESSION["cart"];
        //商品の追加
        //商品と数量がPOSTされたとき
        if(isset($_POST["product_name"]) && isset($_POST["num"]) ){
            $array_product_name = array_column($array,"product_name");
            //既に買い物かごに入っているのと、同じ商品がかごに入ったとき
            if(in_array($_POST["product_name"],$array_product_name)){
                $index = array_search($POST,["product_name"],$array_product_name);
                $array[$index]["num"] += $_POST["num"];
            //異なる商品がかごに入ったとき
            }else{
                $array[] = [
                    "product_name" => $_POST["product_name"],
                    "num" => $POST["num"]
                ];
            }
        }
            //商品の削除
            //商品名だけがPOSTされたとき
            if(isset($_POST["product_name"]) && !isset($_POST["num"])){
                $array_product_name = array_column($array,"product_name");
                //商品を削除る
                if(in_array($_POST["product_name"],$array_product_name)){
                    $index = array_search($POST,["product_name"],$array_product_name);
                    unset($arrau[$index]);
                    $array = array_values($array);
                }
            }
            //買い物かごに初めて商品をいれるとき
        }else{
            $array[] = [
                "product_name" => $_POST["product_name"],
                "num" => $_POST["num"]
            ];
        }

        //配列セッションに格納
        $_SESSION["cart"] = $array;
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
                    $img = $product[$index]["img"];
                    echo "<div><img src=./".$img."class ='img-fluid' style='width:120px; hight:aout;'></div>";
                }
                echo "</div>\n";
                echo "<div class ='col -3'>";
                    //echo $key;
                    echo "<h3>".$value['product_name']."</h3>";
                    echo "<h4 class = 'text-danger'>".number_format($price)."円</h4>";
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
        ?>
        <div><a href="shoping.php" class="h3">買い物を続ける</a></div>
    </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </div>
    </body>
    </html>
