<?php

use Illuminate\Database\Seeder;

class DeliveriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('deliveries')->insert([
        	[
            	'client_id' => 1,
            	'delivery_person_id' => 1,
            	'status' => 'WAIT',
                'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        	]
        ]);
    }
}
