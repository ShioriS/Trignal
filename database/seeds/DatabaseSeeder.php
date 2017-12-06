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
    }
}
