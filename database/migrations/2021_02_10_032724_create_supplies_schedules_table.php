<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSuppliesSchedulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('supplies_schedules', function (Blueprint $table) {
            $table->unsignedbiginteger('supply_id');
            $table->unsignedbiginteger('schedule_id');
            $table->timestamps();
            $table->primary(['supply_id', 'schedule_id']);

            $table->foreign('supply_id')->references('id')->on('supplies');
            $table->foreign('schedule_id')->references('id')->on('schedules');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('supplies_schedules');
    }
}
