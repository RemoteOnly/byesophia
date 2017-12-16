<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFavorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('favors', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('user_id')->comment('普通用户和拍摄者id');
            $table->unsignedInteger('image_id')->comment('图片的id');
            $table->unsignedInteger('group_id')->comment('图片所属组的id');
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
        Schema::dropIfExists('favors');
    }
}
