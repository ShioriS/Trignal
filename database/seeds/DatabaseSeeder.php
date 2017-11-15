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
        DB::insert("insert into items(image,name,category,price) value (?,?,?,?)",[
            "k1.jpg","トンボ玉かんざし"," かんざし",2000
        ]);

        DB::insert("insert into items(image,name,category,price) value (?,?,?,?)",[
            "k2.jpg","ゆらゆらガラスのかんざし"," かんざし",3000
        ]);

        DB::insert("insert into items(image,name,category,price) value (?,?,?,?)",[
            "p1.jpg","てまりピアス"," ピアス・イヤリング",3000
        ]);

        DB::insert("insert into items(image,name,category,price) value (?,?,?,?)",[
            "ki1.jpg","海色ピアス・イヤリング"," ピアス・イヤリング",3000
        ]);

        DB::insert("insert into items(image,name,category,price) value (?,?,?,?)",[
            "n1.jpg","幻想ネックレス"," ネックレス",3000
        ]);
    }
}
