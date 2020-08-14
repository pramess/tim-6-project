<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUpvoteDownvotePertanyaanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('upvote_downvote_pertanyaan', function (Blueprint $table) {
            $table->bigIncrements('id');
              $table->unsignedBigInteger('profile_id')->nullable();

            $table->foreign('profile_id')->references('id')->on('profiles');
              $table->unsignedBigInteger('pertanyaan_id')->nullable();

            $table->foreign('pertanyaan_id')->references('id')->on('pertanyaan');
            $table->integer('vote_point_pertanyaan');
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
        Schema::dropIfExists('upvote_downvote_pertanyaan');
    }
}
