<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTformTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tform', function (Blueprint $table) {
            $table->id();
            $table->string('name',50);
            $table->string('phoneno',50);
            $table->string('address',50);
            $table->date('bookingdate');
            $table->time('bookingtime');
            $table->string('carname',50);
            $table->string('carcolor',50);
           
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
        Schema::dropIfExists('tform');
    }
}
