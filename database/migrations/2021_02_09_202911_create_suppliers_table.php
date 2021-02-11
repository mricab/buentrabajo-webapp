<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSuppliersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('suppliers', function (Blueprint $table) {
            $table->id();
            $table->unsignedbiginteger('person_id');
            $table->unsignedbiginteger('category_id');
            $table->text('experience');
            $table->timestamp('request_date', $precision = 0);
            $table->string('request_state')->default('pendiente');
            $table->string('request_approval_date')->nullable();
            $table->string('availability_state')->default('disponible');
            $table->integer('score_sum')->default(0);
            $table->integer('score_count')->default(0);
            $table->timestamps();

            $table->foreign('person_id')->references('id')->on('people');
            $table->foreign('category_id')->references('id')->on('categories');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('suppliers');
    }
}
