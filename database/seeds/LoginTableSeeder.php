<?php

use Illuminate\Database\Seeder;

class LoginTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\User::truncate();
        // factory(\App\User::class,10)->create();

        \App\User::create([
            'name' => "Júnior Martins",
            'email' => "juniorm2488@gmail.com",
            'password' => bcrypt("JrMart1ns"),
        ]);
        \App\User::create([
            'name' => "Leonardo Vilarinho",
            'email' => "leonardo-i@outlook.com",
            'password' => bcrypt("CashV1lar1nho"),
        ]);
        \App\User::create([
            'name' => "Guilherme Mamedio",
            'email' => "mamedioguilherme@gmail.com",
            'password' => bcrypt("CashMamed1o"),
        ]);
    }
}
