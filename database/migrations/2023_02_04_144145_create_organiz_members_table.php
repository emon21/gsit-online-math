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
        Schema::create('organiz_members', function (Blueprint $table) {
            $table->id();
            $table->string('organiz_name')->nullable();
            $table->string('organiz_desination')->nullable();
            $table->string('desination_title')->nullable();
            $table->text('work')->nullable();
            $table->text('organiz_picture')->nullable();
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
        Schema::dropIfExists('organiz_members');
    }
};
