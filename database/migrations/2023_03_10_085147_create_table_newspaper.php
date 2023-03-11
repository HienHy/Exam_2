<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableNewspaper extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('newspaper', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('content');
            $table->string('image');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('title_id');
            $table->date('publish_date');
            $table->bigInteger('views_count');
            $table->integer('status');

            $table->foreign('user_id')->references('id')->on("users");
            $table->foreign('title_id')->references('id')->on("title");



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
        Schema::dropIfExists('newspaper');
    }
}
