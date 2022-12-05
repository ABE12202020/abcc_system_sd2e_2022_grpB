<div class="row">
      <?php 
      for($i=0;$i<8;$i++){
          ?> 
          <div class="col-md-3">
            <?php 
            echo "<img src='".$product[$i]["img"]."' class='img-fluid rounded'>";
            echo "<h3>".$product[$i]["product_name"]."</h3>";
            echo "<span class='text-danger'>".number_format($product[$i]["price"])."円</span><br>";
            echo $product[$i]["url"];
            ?>   
        </div>
      <?php
      }
      ?>