<?php

use Illuminate\Database\Seeder;

class NewsUsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \App\NewsUser::create([
            'news_id'=>1,
            'user_id'=>5,
            'flag'=>'Algo'
        ]);

        \App\NewsUser::create([
            'news_id'=>2,
            'user_id'=>6,
            'flag'=>'Algo'
        ]);

        \App\NewsUser::create([
            'news_id'=>3,
            'user_id'=>7,
            'flag'=>'Algo'
        ]);

        \App\NewsUser::create([
            'news_id'=>4,
            'user_id'=>4,
            'flag'=>'Algo'
        ]);

        \App\NewsUser::create([
            'news_id'=>5,
            'user_id'=>3,
            'flag'=>'Algo'
        ]);
    }
}
