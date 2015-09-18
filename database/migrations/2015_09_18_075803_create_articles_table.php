<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->increments('id'); //主键，自增
            $table->string('title');
            $table->text('intro');
            $table->text('content');
            $table->timestamp('published_at');
            $table->timestamps(); //自动创建两个字段：created_at和update_at
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()  //在执行回滚命令时执行
    {
        Schema::drop('articles');
    }
}
