﻿<?php
	require "component.php"
	session_start();
?>

<!DOCTYPE html>
<html>

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
<title>商品一覧２</title>
<style>
.bg-img{
background-image: url("../img/topimage 2.jpg");
background-size: cover;
background-position: center 60%;
}
</style>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<meta name="viewport" content="width=device-width, initial-scale=1" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

</head>

<body>
<nav class="navbar navbar-expand-md navbar-dark" aria-label="Fourth navbar example" style="background-color: #000000;">
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
	<div class="row p-1 gy-4">
		<div class="col-lg-4 col-md-6">
			<div cardclass="row mt-2 mb-1"></div>
			<div class="card">
				<img class="card-img-top" src="../img/samugyo.png">
				<div class="card-body">
					<h5 class="card-title"><font size="5">大人気の韓国料理！サムギョプサル</font></h5>
					<a href="../syousai/samugyo.html">>>詳細へ</a>
					
				</div>
			</div>
		</div>
		<div class="col-lg-4 col-md-6">
			<div class="card">
				<img class="card-img-top" src="../img/bibinba.png">
				<div class="card-body">
					<h5 class="card-title"><font size="5">野菜たっぷりビビンバ</font></h5>
					<a href="../syousai/bibinba.html">>>詳細へ</a>
				</div>
			</div>
		</div>
		<div class="col-lg-4 col-md-6">
			<div class="card">
				<img class="card-img-top" src="../img/toppogi.png">
				<img class="my-3 w-1">
				<div class="card-body">
					<h5 class="card-title"><font size="5">韓国棒餅の甘辛トッポギ</font></h5>
					<a href="../syousai/toppogi.html">>>詳細へ</a>
				</div>
			</div>
		</div>
		<div class="col-lg-4 col-md-6">
			<div class="card">
				<img class="card-img-top" src="../img/paeria.png">
				<div class="card-body">
					<h5 class="card-title"><font size="5">海の幸パエリア</font></h5>
					<a href="../syousai/paeria.html">>>詳細へ</a>
				</div>
			</div>
		</div>
		<div class="col-lg-4 col-md-6">
			<div class="card">
				<img class="card-img-top" src="../img/toruty.png">
				<div class="card-body">
					<h5 class="card-title"><font size="5">本格！トルティージャ</font></h5>
					<a href="../syousai/toruty.html">>>詳細へ</a>
				</div>
			</div>
		</div>
		<div class="col-lg-4 col-md-6">
			<div class="card">
				<img class="card-img-top" src="../img/ahi03-8.jpg">
				<div class="card-body">
					<h5 class="card-title"><font size="5">具だくさんアヒージョ</font></h5>
					<a href="../syousai/ahijo.html">>>詳細へ</a>
				</div>
			</div>
		</div>
		<div class="col-lg-4 col-md-6">
			<div class="card">
				<img class="card-img-top" src="../img/pide.png">
				<div class="card-body">
					<h5 class="card-title"><font size="5">牛肉と野菜のピデ</font></h5>
					<a href="../syousai/pide.html">>>詳細へ</a>
				</div>
			</div>
		</div>
		<div class="col-lg-4 col-md-6">
			<div class="card">
				<img class="card-img-top" src="../img/torukoice.png">
				<div class="card-body">
					<h5 class="card-title"><font size="5">のび～るトルコアイス</font></h5>
					<a href="../syousai/torukoice.html">>>詳細へ</a>
				</div>
			</div>
		</div>
		<div class="col-lg-4 col-md-6">
			<div class="card">
				<img class="card-img-top" src="../img/kebabu.png">
				<div class="card-body">
					<h5 class="card-title"><font size="5">野菜が摂れるケバブ</font></h5>
					<a href="../syousai/kebabu.html">>>詳細へ</a>
				</div>
			</div>
		</div>


	</div>
	

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>
