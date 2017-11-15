<?php
?>

<!DECTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>アクセサリー工房</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link href="../css/default.css"type="text/css"rel="stylesheet">
    <link href="../css/style.css"type="text/css"rel="stylesheet">

</head>


<body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!--タイトル設定-->
<div class="box1">
    <div class="title">
        <p>アクセサリー工房</p>
    </div>


    <!--検索設定-->
    <div class="search">
        <input type="hidden" name="mode" value="srh">
        <select name="cid">
            <option value>すべての商品</option>
            <option value>かんざし</option>
            <option value>ピアス</option>
            <option value>ネックレス・チョーカー</option>
            <option value>ブレスレット</option>
            <option value>指輪</option>
            <option value>キャラクターイメージ</option>
            <option value>その他</option>

        </select>
        <button type="submit">
            <span>検索</span>
        </button>
    </div>


    <!--上にあるボーダー-->
    <ul class="inline-block">
        <!--トップページ-->
        <li class="home">
            <a href="./">ホーム</a>
        </li>


        <!--カテゴリー-->
        <li class="category">
            <a href="category">カテゴリー</a>
        </li>

        <!--カート-->
        <li class="cart">
            <a href="./">カート</a>
        </li>
    </ul>


</div>　　
<div class="main">
<div class="cart">

    <img src="../image/<?= $item->image ?>">
    <?= $item->name ?>
    <?= $item->category ?>
    <?= $item->price ?> 円
    <form action="/cart/<?= $item->id ?>" method="POST">
        <?= csrf_field() ?>
        <input type="submit" value="カートに追加する">
    </form>
</div>