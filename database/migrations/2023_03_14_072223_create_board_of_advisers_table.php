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
        Schema::create('board_of_advisers', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('desination');
            $table->string('work');
            $table->string('our_dauty')->nullable();
            $table->string('img_upload')->nullable();
            $table->string('section_type')->default('top');
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
        Schema::dropIfExists('board_of_advisers');
    }
};
