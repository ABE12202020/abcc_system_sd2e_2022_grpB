<!DOCTYPE html>
<html>

<head>
  
  <link rel="stylesheet" href="style.css">
<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
<!-- <IfModule mime_module>    AddType application/x-httpd-php .html </IfModule> -->
<title>商品詳細</title>
<style>
</style>
<script type="text/javascript">
</script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<meta name="viewport" content="width=device-width, initial-scale=1" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
<link href="style.css"rel="stylesheet"type="text/css">
</head>
<body>
  <nav class="navbar navbar-expand-md navbar-dark" aria-label="Fourth navbar example" style="background-color: #000000;">
    <div class="container-fluid">
      <a class="navbar-brand" href="#"><img src="../img/rogo b t.pn"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExample04">
        <ul class="navbar-nav me-auto mb-2 mb-md-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">トップ</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">お気に入り</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">殿堂入り</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">ランキング</a>
          </li>
        </ul>
        <form role="search">
          <input class="form-control" type="search" placeholder="レシピを検索" aria-label="Search">
        </form>
      </div>
    </div>
  </nav>
  <br>

      <div class="maindiv">
        <div class="textimg">
          <img src="../img/ahi-jo.png" width="420" height="350" class="rounded">
        </div>
          <div class="textimg text-align">
            <h1>アヒージョ</h1>
            <p>
               <br>
               ●「アヒージョ」は、ニンニクで香りをつけたオリーブオイルを使い、具材を煮込んで作る料理です。<br>
               ●シンプルな料理ながら美味しくお酒との相性も良いため、おつまみとしても高い人気を誇ります。<br>
               ●オイルはパンにつけてもおいしいです!<br>
            </p>


            <div name="main" class="container">
              <div class="row">

                <div class="col-lg-1"></div>

                <div class="col-lg-5">
                  <div class="card">
                    <div class="card-body">
                      <h5 class="card-title text-warning">商品情報<br>————————————————</h5>
                      <dl class="text-dark text-left">
                        <dt>内容量</dt><dd>330ml ／ 本<br>※48本セットにてお届けします</dd>
                        <dt>原材料名</dt><dd>むきえび,マッシュルーム,ブロッコリー,にんにく,鷹の爪</dd>
                        <dt>保存方法</dt><dd>高温、直射日光を避けてください。</dd>
                        <dt>原産国</dt><dd>スペイン</dd>
                        <dt>輸入者の<br>名称及び住所</dt><dd>aso株式会社<br>東京都渋谷区恵比寿1-18-15</dd>
                        <dt>賞味期限</dt><dd>2023年8月19日</dd>
                      </dl>
                    </div>
                  </div>
                </div>

                <div class="col-lg-5">
                  <div class="card">
                      <div class="card-body">
                      <h5 class="card-title text-warning">配送について<br>————————————————</h5>
                      <dl class="text-dark text-left">
                        <dt>送料</dt><dd>	550円／件<br> ※送料は商品ごとにかかります。<br> ※配送先によって送料が異なる可能性があります。</dd>
                        <dt>配送業者</dt><dd>	佐川急便（沖縄県・離島のみヤマト運輸）</dd>
                        <dt>配送可能地域</dt><dd>全国</dd>
                      </dl>
                      </div>
                  </div>
                </div>
               
                <form action = "cart_1_abe.php" method="post">
                  <?php
                $aa=0;
                <div class="row m-1 mt-4">
                  <div class="col-md-4"></div>
                  <!-- <div style="display: flex;">
                    <div>{{ count }}</div>
                    <button
                        class="button"
                        @click = "decrement"
                    >-1</button>
                    <button
                        class="button"
                        @click = "increment"
                    >+1</button>
                </div> -->
                  <div class="col-md-4"></div>
                </div>
                <div class="row m-1 mt-3">
                  <div class="col-2"></div>
                  <div class="col-8">
                    <div class="d-grid gap-2">
                    <input type="submit" value="カートに入れる">
</form>
?>
                      <!-- <button class="btn btn-warning btn-lg text-white" type="button">カートに入れる</button> -->
                    </div>
                  </div>
                  <div class="col-2"></div>
                </div>
              </div>
            </div>
          </div>
      </div>
      <!-- <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>
    <script src="./script.js"></script> -->
</body>