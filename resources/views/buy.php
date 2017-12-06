<?php
/**
 * Created by PhpStorm.
 * User: B6119
 * Date: 2017/11/08
 * Time: 13:40
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
    <link href="css/style.css"type="text/css"rel="stylesheet">
    <link href="css/buy.css"type="text/css"rel="stylesheet">

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



    <!--上にあるボーダー-->
    <ul class="inline-block">
        <!--トップページ-->
        <li class="../">
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


</div>　　


<!--住所等の入力-->
<div class="main">
    <br>
<form action="/buy" method="POST">
    <?=csrf_field()?>

    <div class="form-group">
        <label for="exampleInputEmail1">名前</label>
        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="霜月　隼" name="name">
        <?php if($errors->first('name')):?>
            名前を入力してください。
        <?php endif;?>
    </div>

    <div class="form-group">
        <label for="exampleInputEmail1">Email address</label>
        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="****.****@****,jp" name="email">
        <?php if($errors->first('email')):?>
            メールアドレスを入力してください。
        <?php endif;?>
    </div>

        <div class="form-group">
            <label for="exampleInputEmail1">電話番号</label>
            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="0120******" name="tel">
            <?php if($errors->first('tel')):?>
                電話番号を入力してください。
            <?php endif;?>
        </div>


    <div class="form-group">
        <label for="exampleInputEmail1">住所</label>
        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="東京都渋谷区○○" name="address">
        <?php if($errors->first('address')):?>
            お届け先の住所を入力してください。
        <?php endif;?>
    </div>

    <div style="text-align:right">
        <button type="submit" class="btn btn-info">送信
        </button>
    </div
</form>

</div>

