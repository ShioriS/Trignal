<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        DB::insert("insert into items(image,name,category,description,price) value (?,?,?,?,?)",[
            "k1.jpg","トンボ玉かんざし"," かんざし","親しみやすく愛らしいオリジナルデザインのとんぼ玉に仕上げました。",2000
        ]);

        DB::insert("insert into items(image,name,category,description,price) value (?,?,?,?,?)",[
            "k2.jpg","ゆらゆらガラスのかんざし"," かんざし","ガラスビーズを使った秋カラーのかんざしです",3000
        ]);

        DB::insert("insert into items(image,name,category,description,price) value (?,?,?,?,?)",[
            "p1.jpg","てまりピアス"," ピアス・イヤリング","ウッドビーズに刺繍糸を巻きつけレジン（樹脂）で固めたピアスです。",3000
        ]);

        DB::insert("insert into items(image,name,category,description,price) value (?,?,?,?,?)",[
            "ki1.jpg","海色ピアス・イヤリング"," ピアス・イヤリング","夏にぴったりの海をイメージしたイヤリングになります。",3000
        ]);

        DB::insert("insert into items(image,name,category,description,price) value (?,?,?,?,?)",[
            "n1.jpg","幻想ネックレス"," ネックレス","アンティーク調の宇宙をイメージしたネックレスになります。",3000
        ]);

        DB::insert("insert into items(image,name,category,description,price) value (?,?,?,?,?)",[
            "p2.png","ホログラムピアス"," ピアス・イヤリング","きらきら輝く乱切りホログラムがアクセント水玉型は定番！！",1500
        ]);

        DB::insert("insert into items(image,name,category,description,price) value (?,?,?,?,?)",[
            "y1.jpg","butterfly-ring"," 指輪","ゴールドカラーのリングに真っ赤な蝶々が指元を飾ります",1250
        ]);

        DB::insert("insert into items(image,name,category,description,price) value (?,?,?,?,?)",[
            "p3.jpg","金平糖ピアス"," ピアス・イヤリング","本物の金平糖みたいなおいしそうなピアスです(笑)",1300
        ]);

        DB::insert("insert into items(image,name,category,description,price) value (?,?,?,?,?)",[
            "img1.jpg","刀剣乱舞彩玉"," ピアス・イヤリング","刀剣乱舞のキャラクターをイメージした巻き玉のイヤリング",1350
        ]);

        DB::insert("insert into items(image,name,category,description,price) value (?,?,?,?,?)",[
            "img2.jpg","無神ルキイメージピアス"," ピアス・イヤリング","大人気の乙女ゲームディアラバの無神ルキをイメージして作成したピアスです。",1300
        ]);

        DB::insert("insert into items(image,name,category,description,price) value (?,?,?,?,?)",[
            "img3.jpg","土方歳三イメージバックチャーム"," バックチャーム","こちらも大人気の乙女ゲーム「薄桜鬼」より鬼の副長こと土方をイメージして作成しました",1500
        ]);
    }
}
