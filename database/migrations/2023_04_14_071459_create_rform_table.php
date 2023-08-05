<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRformTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rform', function (Blueprint $table) {
            $table->id();
            $table->string('name',50);
            $table->string('phoneno',50);
            $table->string('address',50);
            $table->string('carname',50);
            $table->date('bookingdate');
            $table->date('returndate');
            $table->time('bookingtime');
            $table->time('returntime');
        
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
        Schema::dropIfExists('rform');
    }
}
