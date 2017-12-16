<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('images', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('camerist_id')->comment('上传人id');
            $table->unsignedInteger('group_id')->nullable()->comment('组id');
            $table->unsignedInteger('area_id')->comment('拍摄地id');
            $table->string('url')->comment('图片存储地址');
            $table->json('ext_json')->nullable()->comment('格外的信息，比如地点信息');
            $table->tinyInteger('display_order')->default(0)->comment('组内显示顺序');
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
        Schema::dropIfExists('images');
    }
}
