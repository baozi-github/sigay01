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
        DB::table('tests')->insert([
            'username' => 'baozi',
            'email' => '894336866@qq.com',
            'password' => bcrypt('123456'),
        ]);
    }
}
