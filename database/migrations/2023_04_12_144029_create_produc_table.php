<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProducTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produc', function (Blueprint $table) {
            $table->id();
            $table->string('name',50);
            $table->string('image',50);
            $table->string('carname',50);
            $table->string('modelyear',50);
            $table->string('colour',50);
            $table->string('battery',50);
            $table->string('topspeed',50);
            $table->string('charginghrs',50);
            $table->string('price',50);
            $table->string('arairange',50);
            $table->string('bodytype',50);
            $table->string('fueltype',50);
            $table->string('noofseats',50);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('produc');
    }
}
