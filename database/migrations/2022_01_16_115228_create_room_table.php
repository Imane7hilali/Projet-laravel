<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoomTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rooms', function(Blueprint $table){
            $table->increments('id');
            $table->foreignId('hotel_id');
            $table->string('type');
            $table->integer('room_number');
            $table->integer('room_price');
            $table->string('description');
            $table->string('room_file_path');
            $table->string('number_people');
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
        Schema::dropIfExists('room');
    }
}
