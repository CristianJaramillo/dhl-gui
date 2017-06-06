<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Delivery extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('deliveries', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('client_id')->unsigned();
            $table->integer('delivery_person_id')->unsigned();
            $table->enum('status', ['WAIT', 'DELIVERED', 'CONFIRMED']);
            $table->timestamps();
            $table->foreign('client_id')->references('id')->on('clients');
            $table->foreign('delivery_person_id')->references('id')->on('delivery_persons');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('deliveries');
    }
}
