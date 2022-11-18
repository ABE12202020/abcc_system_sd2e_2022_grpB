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
    <h1>Hello, world!</h1>
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
      for($i=0; $i<4;$i++){
          ?> 
            <div class="col-md-3">
            <?php 
            echo "<img src='".$product[$i]["img"]."' class='img-fluid rounded'>";
            echo "<h3>". $product[$i]["product_name"]."</h3>";
            echo "<span class='text-danger'>".number_format($product[$i]["price"])."円</span>";
            ?>
            </div>

          <form action="cart.php" class="mt-3" method="post">
              <input type="hidden" name="product_name" value="<?= $product[$i]["product_name"] ?>">
              <select name="num">
                  <option value=1>1</option> 
                  <option value=2>2</option>
                  <option value=3>3</option> 
              </select>
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