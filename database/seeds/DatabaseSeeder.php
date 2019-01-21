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
        DB::table('users')->insert([
            'name' => 'SA',
            'email' => 'sa@mail.com',
            'admin' => 'S',
            'password' => bcrypt('123456'),
        ]);
    }
}
