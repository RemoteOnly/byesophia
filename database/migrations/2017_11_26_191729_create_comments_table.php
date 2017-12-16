<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('user_id')->comment('包括拍着人和普通用户');
            $table->unsignedInteger('at_user_id')->comment('@到的那人的id，默认是拍摄者的id,为0时回复所有');
            $table->unsignedInteger('image_id')->comment('被评论图片的id');
            $table->unsignedInteger('group_id')->comment('被评论图片所属组的id');
            $table->text('content')->comment('评论的内容');
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
        Schema::dropIfExists('comments');
    }
}
