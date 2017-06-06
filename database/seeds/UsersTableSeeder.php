<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Cristian Jaramillo',
            'email' => 'cristia_gerar@hotmail.com'
            'password' => bcrypt('secret'),
        ]);
    }
}
