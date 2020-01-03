<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \App\User::create([
           'username' => 'Administrator',
           'email' => 'admin@tdi.pt',
           'password' => Hash::make('admin123'),
           'role_id' => 1,
            'news_size_id'=>2
        ]);

        \App\User::create([
            'username' => 'Manager',
            'email' => 'manager@tdi.pt',
            'password' => Hash::make('manager123'),
            'role_id' => 2,
            'news_size_id'=>3
        ]);

        \App\User::create([
            'username' => 'Miguel Esteves Cardoso',
            'email' => 'opiniao@publico.pt',
            'password' => Hash::make('manager123'),
            'role_id' => 2,
            'news_size_id'=>3
        ]);

        \App\User::create([
            'username' => 'Victor Ferreira',
            'email' => 'voferreira@publico.pt',
            'password' => Hash::make('manager123'),
            'role_id' => 2,
            'news_size_id'=>2
        ]);

        \App\User::create([
            'username' => 'Leonete Botelho ',
            'email' => 'lbotelho@publico.pt',
            'password' => Hash::make('manager123'),
            'role_id' => 2,
            'news_size_id'=>3
        ]);

        \App\User::create([
            'username' => 'Patrícia Carvalho',
            'email' => 'patricia.carvalho@publico.pt',
            'password' => Hash::make('manager123'),
            'role_id' => 2,
            'news_size_id'=>2
        ]);

        \App\User::create([
            'username' => 'Sofia Neves',
            'email' => 'sofia.neves@publico.pt',
            'password' => Hash::make('manager123'),
            'role_id' => 2,
            'news_size_id'=>2
        ]);


        factory('App\User', 20)->create();
    }
}
