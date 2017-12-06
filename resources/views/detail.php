<?php
?>

<!DECTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>アクセサリー工房</title>
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link href="../css/default.css"type="text/css"rel="stylesheet">
    <link href="../css/detail.css"type="text/css"rel="stylesheet">

</head>


<body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!--タイトル設定-->

    <div class="title">
        <p>アクセサリー工房</p>
    </div>




    <!--上にあるボーダー-->
    <ul class="inline-block">
        <!--トップページ-->
        <li class="home">
            <a href="../">ホーム</a>
        </li>


        <!--カテゴリー-->
        <li class="category">
            <a href="../category">人気商品</a>
        </li>

        <!--カート-->
        <li class="cart">
            <a href="../cart">カート</a>
        </li>
    </ul>


　




<div class="panel panel-warning">
    <div class="panel-heading">
        <br><?= $item->category ?>
    </div>
    <div class="panel-body">
        <div class="media">
            <a class="media-left" href="#">
        <div class="syouhin">
            <img src="../image/<?= $item->image ?>"alt="" width="350" height="270">
            </a>
            <div class="media-body">
                <h4 class="media-heading">
            <br><?= $item->name ?></h4>
            <br><?= $item->category ?>
            <br><?= $item->description ?>
            <br><?= $item->price ?> 円
                <br>
                <div class="form">
            <form action="/cart/<?= $item->id ?>" method="POST">
                <?= csrf_field() ?>
                <input type="submit" value="カートに追加する">
                </div>
        </div>
        </form>
        </div>
    </div>
    </div>



