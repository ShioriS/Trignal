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
    <link href="css/thanks.css"type="text/css"rel="stylesheet">

</head>


<body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!--タイトル設定-->
<div class="box1">
    <div class="title">
        <p>アクセサリー工房</p>
    </div>





    <!--上にあるボーダー-->
    <ul class="inline-block">
        <!--トップページ-->
        <li class="home">
            <a href="">ホーム</a>
        </li>


        <!--カテゴリー-->
        <li class="category">
            <a href="./category">人気商品</a>
        </li>

        <!--カート-->
        <li class="cart">
            <a href="cart">カート</a>
        </li>
    </ul>


</div>　　









<!--thanks-->
<div class="thanks">
    <p>ご購入ありがとうございました！</p>
</div>

<!--おすすめラインナップ-->
<div class="main">
    <div class="osusume">
        <p>今月のおすすめラインナップ</p>
    </div>



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
<br>

</body>
</html>
