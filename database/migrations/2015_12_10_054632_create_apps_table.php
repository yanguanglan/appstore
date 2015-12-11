<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAppsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('apps', function (Blueprint $table) {
            $table->increments('id');
            $table->uuid('ids')->unique();//唯一UUID
            $table->string('name_chn');//中文名称
            $table->string('name_eng');//英文名称
            $table->string('thumb');//封面图片
            $table->json('screenshots');//APP截图多张
            $table->text('description');//描述
            $table->integer('cid')->unsigned();//游戏类型
            $table->enum('platform', ['android', 'ios', 'oculus']);//平台 android ios oculus
            $table->enum('operation', ['handle', 'head', 'gesture']);//操作 手柄 头带 手势
            $table->string('tags');//标签
            $table->json('params');//参数
            $table->string('author');//开发商
            $table->string('source');//下载地址 or 文件地址
            $table->integer('downloads')->unsigned()->default(101);//下载次数
            $table->boolean('closed')->default(0);//下线
            $table->timestamps();
            $table->softDeletes();
            $table->index('cid');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('apps');
    }
}
