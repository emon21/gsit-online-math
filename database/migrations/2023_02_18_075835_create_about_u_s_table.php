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
        Schema::create('about_u_s', function (Blueprint $table) {
            $table->id();
            $table->string('about_olympiad')->nullable();
            $table->text('about_olympiad_desc')->nullable();
            $table->string('about_btea')->nullable();
            $table->text('about_btea_desc')->nullable();
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
        Schema::dropIfExists('about_u_s');
    }
};
