<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHalfyearlyPerformancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('halfyearly_performances', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('kpi_id');
            $table->enum('half', [ 1, 2 ] );
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
        Schema::dropIfExists('halfyearly_performances');
    }
}
