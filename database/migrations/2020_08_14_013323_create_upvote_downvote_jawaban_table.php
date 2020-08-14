<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUpvoteDownvoteJawabanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('upvote_downvote_jawaban', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('profile_id')->nullable();

            $table->foreign('profile_id')->references('id')->on('profiles');
              $table->unsignedBigInteger('jawaban_id')->nullable();

            $table->foreign('jawaban_id')->references('id')->on('jawaban');
            $table->integer('vote_point_jawaban')->default(0);
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
        Schema::dropIfExists('upvote_downvote_jawaban');
    }
}
