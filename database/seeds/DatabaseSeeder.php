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
        $this->call(ClientsTableSeeder::class);
        $this->call(DeliveryPersonsTableSeeder::class);
        $this->call(DeliveriesTableSeeder::class);
    }
}
