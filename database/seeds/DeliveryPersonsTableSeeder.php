<?php

use Illuminate\Database\Seeder;

class DeliveryPersonsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('delivery_persons')->insert([
        	[
            	'name' => 'Cristian Jaramillo',
            	'password' => '123456',
                'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        	]
        ]);
    }
}
