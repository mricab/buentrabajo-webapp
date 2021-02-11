<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePeopleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('people', function (Blueprint $table) {
            $table->id();
            $table->string('names');
            $table->string('first_last_name');
            $table->string('second_last_name');
            $table->string('avatar');
            $table->date('birth_date');
            $table->smallinteger('age');
            $table->integer('id_num');
            $table->string('id_type');
            $table->integer('phone');
            $table->string('address');
            $table->double('address_latitude');
            $table->double('address_longitute');
            $table->unsignedbiginteger('city_id');
            $table->timestamps();

            $table->foreign('city_id')->references('id')->on('cities');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('people');
    }
}
