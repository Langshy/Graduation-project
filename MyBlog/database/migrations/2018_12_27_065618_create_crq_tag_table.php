<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCrqTagTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('crq_tag', function (Blueprint $table) {
            $table->increments('id');
            $table->string('tag_name')->comment('标签名');
            $table->string('tag_type')->comment('标签类型')->nullable();
            $table->string('tag_description')->comment('标签描述')->nullable();
            $table->integer('tag_parent')->comment('父级标签')->nullable();
            $table->boolean('tag_showIndex')->comment('是否显示于主页')->default(false);
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
        Schema::dropIfExists('crq_tag');
    }
}
