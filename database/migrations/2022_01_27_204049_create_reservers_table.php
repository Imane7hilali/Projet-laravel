 <?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReserversTable extends Migration
{
     
    public function up()
    {
        Schema::create('reservers', function(Blueprint $table){
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->date('arrival_date');
            $table->date('going_date');
            $table->foreignId('Hotel_id');
            $table->timestamps();

        });
    }

   
    public function down()
    {
        Schema::dropIfExists('reserver');
    }
}
