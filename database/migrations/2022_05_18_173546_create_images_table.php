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
        Schema::create('images', function (Blueprint $table) {
            $table->id();
            $table->foreignId('garden_id')->constrained();
            $table->tinyInteger('user_rating');
            $table->tinyInteger('admin_rating');
            $table->tinyText('filename');
            $table->integer('times_displayed');
            $table->integer('times_answered_correctly');
            $table->integer('times_answered_incorrectly');
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
        Schema::dropIfExists('image');
    }
};
