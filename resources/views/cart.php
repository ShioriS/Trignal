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
        <link href="css/default.css"type="text/css"rel="stylesheet">
        <link href="css/cart.css"type="text/css"rel="stylesheet">

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
                <a href="./">ホーム</a>
            </li>


            <!--カテゴリー-->
            <li class="category">
                <a href="./">カテゴリー</a>
            </li>

            <!--カート-->
            <li class="cart">
                <a href="cart">カート</a>
            </li>
        </ul>


        <div class="main">
        <div class="panel panel-default">
            <div class="panel-heading">
                カート内容
            </div>

                    <table class="table">
                <thead>
                <tr>
                    <th>画像</th>
                    <th>商品名</th>
                    <th>カテゴリー</th>
                    <th>価格</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach($cartItems as $item): ?> <tr>
                    <th>
                        <div class="cart">
                            <img src="image/<?= $item->image ?>">

                       </th>

                    <td>
                            <?= $item->name ?>
                       </td>

                    <td>
                            <?= $item->category ?>
                        </td>

                    <td>
                            <?= $item->price ?> 円
                        </div>

                    </td>

                </tr>
                <?php endforeach; ?></li>


                </tbody>


        </div>
    </table>
            <from action="/buy">
            <div style="text-align:right">
            <button type="submit" class="btn btn-info">登録</button>
            </div>
　</from>



<!--    <div class="footer">-->
<!--        <p>&copy アクセサリー工房</p>-->
<!--    </div>-->

</body>
    </html>
