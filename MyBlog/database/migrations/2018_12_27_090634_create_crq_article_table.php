<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCrqArticleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('crq_article', function (Blueprint $table) {
            $table->increments('id');
            $table->string('articleTitle')->comment('标题')->unique();
            $table->string('authorID')->comment('作者ID')->unique();
            $table->string('articleImage')->comment('文章图片')->nullable();
            $table->string('articleContent')->comment('文章内容')->nullable();
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
        Schema::dropIfExists('crq_article');
    }
}
