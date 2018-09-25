<?php

use Illuminate\Support\Facades\Schema;
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
            $table->increments('id');
            $table->string('title','255')->default('')->comment('文章标题');
            $table->string('author','255')->default('包子')->comment('作者');
            $table->string('type','50')->default('PHP')->comment('分类');
            $table->text('miaoshu')->comment('摘要');
            $table->string('pic','255')->default('')->comment('配图');
            $table->text('content')->comment('内容');
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
        Schema::dropIfExists('articles');
    }
}
