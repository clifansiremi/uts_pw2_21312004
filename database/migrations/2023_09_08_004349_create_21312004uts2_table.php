<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('21312004uts2', function (Blueprint $table) {
            $table->id();
            $table->uts2_f1();
            $table->uts2_f2();
            $table->uts2_f3();
            $table->uts2_f4();
            $table->foreign('21312004uts1_id')->references('id')->on('21312004uts1');
            $table->foreign('21312004uts3_id')->references('id')->on('21312004uts3');
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
        Schema::dropIfExists('21312004uts2');
    }
};
