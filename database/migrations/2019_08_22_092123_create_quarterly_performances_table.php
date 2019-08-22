<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuarterlyPerformancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('quarterly_performances', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('kpi_id');
            $table->integer('quarter');
            $table->string('year');
            $table->double('planned')->nullable();
            $table->double('actual')->nullable();
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
        Schema::dropIfExists('quarterly_performances');
    }
}
