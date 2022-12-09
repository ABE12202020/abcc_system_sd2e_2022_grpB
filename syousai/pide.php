<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" href="style.css">
<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
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
  <nav class="navbar navbar-expand-md navbar-dark" aria-label="Fourth navbar example" style="background-color: #FF9933;">
    <div class="container-fluid">
      <a class="navbar-brand" href="#"><img src="../img/rogo b t.png" width="20%"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExample04">
        <ul class="navbar-nav me-auto mb-2 mb-md-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="../webフロントエンド/catalog.html"><font size="5">トップ</font></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#"><font size="5">お気に入り</font></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#"><font size="5">ランキング</font></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../webフロントエンド/login.html"><font size="5">ログイン</font></a>
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
          <img src="../img/pide.png" width="420" height="350" class="rounded">
        </div>
          <div class="textimg text-align">
            <h1>牛肉と野菜のピデ</h1>
            <p>
               <br>
               ●ピデとは、フルンと言われる窯で焼き上げた直径30㎝位の円形でふっくらもちもちとした食感のトルコで欠かせないパンの一つです。<br>
               ●ピデの生地には砂糖が使われており、ほのかに甘く懐かしい味がします。<br>
               ●素朴な味で、出来立て熱々のピデは一口食べたらやめられない！
               <br>
            </p>


            <div name="main" class="container">
              <div class="row">

                <div class="col-lg-1"></div>

                <div class="col-lg-5">
                  <div class="card">
                    <div class="card-body">
                      <h5 class="card-title text-warning">商品情報<br>—————————————————————</h5>
                      <dl class="text-dark text-left">
                        <dt>内容量</dt><dd>330ml ／ 本<br>※48本セットにてお届けします</dd>
                        <dt>原材料名</dt><dd>強力・薄力粉,砂糖,塩,水,肉,玉ねぎ,トマト,チリパウダー</dd>
                        <dt>保存方法</dt><dd>高温、直射日光を避けてください。</dd>
                        <dt>原産国</dt><dd>トルコ</dd>
                        <dt>輸入者の<br>名称及び住所</dt><dd>aso株式会社<br>東京都渋谷区恵比寿1-18-15</dd>
                        <dt>賞味期限</dt><dd>2023年8月19日</dd>
                      </dl>
                    </div>
                  </div>
                </div>

                <div class="col-lg-5">
                  <div class="card">
                      <div class="card-body">
                      <h5 class="card-title text-warning">配送について<br>—————————————————————</h5>
                      <dl class="text-dark text-left">
                        <dt>送料</dt><dd>550円／件<br> ※送料は商品ごとにかかります。<br> ※配送先によって送料が異なる可能性があります。</dd>
                        <dt>配送業者</dt><dd>佐川急便(沖縄県・離島のみヤマト運輸)</dd>
                        <dt>配送可能地域</dt><dd>全国</dd>
                      </dl>
                      </div>
                  </div>
                </div>

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
                      <button class="btn btn-warning btn-lg text-white" type="button">カートに入れる</button><br>
                      <a class="btn btn-Light btn-lg text-dark" href="../webフロントエンド/catalog.html" role="button">戻る</a>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>