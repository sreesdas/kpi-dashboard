<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKpisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kpis', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('tag'); // tag for context in chart.js and id of canvas (without spaces)
            $table->string('category');
            $table->enum('performance', [ 'monthly', 'quarterly', 'halfyearly', 'yearly' ] );
            $table->string('unit')->nullable();
            $table->double('threshold')->nullable();
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
        Schema::dropIfExists('kpis');
    }
}
