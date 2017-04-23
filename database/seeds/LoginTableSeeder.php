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
            'name' => "Administrador",
            'email' => "admin@gmail.com",
            'password' => bcrypt("123456789"),
        ]);
    }
}
