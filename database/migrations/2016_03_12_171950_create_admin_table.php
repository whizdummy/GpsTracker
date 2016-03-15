<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdminTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tblAdmin', function(Blueprint $table) {
            $table->engine = "InnoDB";
            $table->increments('adminId');
            $table->string('strUsername', 50);
            $table->string('strFirstName', 50);
            $table->string('strMiddleName', 50)->nullable();
            $table->string('strLastName', 50);
            $table->text('strPassword');
            $table->string('strGender', 10);
            $table->string('strEmail', 100);
            $table->string('strContactNo', 15);
            $table->text('txtPermanentAddress');
            $table->text('txtCurrentAddress');
            $table->char('zipCode', 4);
            $table->boolean('boolStatus');
            $table->date('dateBirthday');
            $table->timestamps();
            $table->integer('intDayOfSubscription')->nullable();
            $table->dateTime('datSubscriptionStart')->nullable();

            $table->unique('strUsername');
            $table->unique(['strFirstName', 'strMiddleName', 'strLastName']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema:dropIfExists('tblAdmin');
    }
}
