<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tblClient', function(Blueprint $table) {
            $table->engine = "InnoDB";
            $table->increments('clientId');
            $table->string('strFirstName', 50);
            $table->string('strMiddleName', 50)->nullable();
            $table->string('strLastName', 50);
            $table->string('strContactNo', 15);
            $table->string('strGender', 10);
            $table->date('dateBirthday');
            $table->text('txtAddress');
            $table->char('deviceNo', 10);
            $table->integer('adminId')
                ->unsigned();
            $table->boolean('boolStatus');
            $table->timestamps();
            $table->integer('intDayOfSubscription')->nullable();
            $table->dateTime('datSubscriptionStart')->nullable();
            $table->string('strPlateNo', 10);

            $table->unique(['strFirstName', 'strMiddleName', 'strLastName']);
            $table->unique('deviceNo');
            $table->unique('strPlateNo');
            $table->foreign('adminId')
                ->references('adminId')
                ->on('tblAdmin')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tblClient');
    }
}
