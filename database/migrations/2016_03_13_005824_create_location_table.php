<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLocationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tblLocation', function(Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('locationId');
            $table->integer('clientId')
                ->unsigned();
            $table->double('dblLongitude');
            $table->double('dblLatitude');
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
        Schema::dropIfExists('tblLocation');
    }
}
