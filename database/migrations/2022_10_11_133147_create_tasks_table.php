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
        Schema::create('todaytasks', function (Blueprint $table) {
            $table->increments('id_task');
            $table->integer('id_user');
            $table->string('task');
            $table->integer('is_completed');
            $table->integer('tmp');
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
        Schema::dropIfExists('todaytasks');
    }
};
