<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePprojecsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pprojecs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('projectname');
            $table->string('type');
            $table->string('super');
            $table->string('section');
            $table->text('date');
            $table->text('abstract');

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
        Schema::dropIfExists('pprojecs');
    }
}
