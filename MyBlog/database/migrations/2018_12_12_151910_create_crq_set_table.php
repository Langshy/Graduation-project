<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCrqSetTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('crq_set', function (Blueprint $table) {
            $table->string('title');
            $table->string('web_image_icon');
            $table->string('web_logo');
            $table->string('bg_image')->nullable();
            $table->string('hot_image_1')->nullable();
            $table->string('hot_image_2')->nullable();
            $table->string('hot_image_3')->nullable();
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
        Schema::dropIfExists('crq_set');
    }
}
