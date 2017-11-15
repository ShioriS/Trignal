<?php
/**
 * Created by PhpStorm.
 * User: B6119
 * Date: 2017/10/04
 * Time: 13:13
 */
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
    <link href="css/default.css"type="text/css"rel="stylesheet">
    <link href="css/top.css"type="text/css"rel="stylesheet">

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
    <a href="">ホーム</a>
</li>


<!--カテゴリー-->
<li class="category">
    <a href="category.php">カテゴリー</a>
</li>

<!--カート-->
<li class="cart">
    <a href="cart">カート</a>
</li>
</ul>


</div>　　









<!--<div class="col-xs-3 col-sm-6">-->

<!--おすすめラインナップ-->
<div class="main">
<p class="osusume">
    <p>今月のおすすめラインナップ</p>
</p>



    <div class="product">
        <?php foreach($items as $item):?>
        <div class="col-sm-2">
  <img src="image/<?= $item->image ?>">

        <br> <?= $item->name ?>
        <br><?= $item->category?>
   　　 <br><?= $item->price ?> 円
            <a href="/detail/<?= $item->id ?>"> 詳細</a>


    </div>

        <?php endforeach; ?>

</div>
</div>



<!---->
<!--<div class="footer">-->
<!--    &copy アクセサリー工房-->
<!--</div>-->

</body>
</html>