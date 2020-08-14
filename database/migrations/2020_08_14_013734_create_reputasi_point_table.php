<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReputasiPointTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reputasi_point', function (Blueprint $table) {
            $table->bigIncrements('id');
             $table->unsignedBigInteger('profile_id')->nullable();

            $table->foreign('profile_id')->references('id')->on('profiles');
             $table->unsignedBigInteger('vote_point_pertanyaan_id')->nullable();

            $table->foreign('vote_point_pertanyaan_id')->references('id')->on('upvote_downvote_pertanyaan');
              $table->unsignedBigInteger('vote_point_jawaban_id')->nullable();

            $table->foreign('vote_point_jawaban_id')->references('id')->on('upvote_downvote_jawaban');
              $table->unsignedBigInteger('point_jawaban_tepat_id')->nullable();

            $table->foreign('point_jawaban_tepat_id')->references('id')->on('jawaban_tepat');
            $table->integer('total_reputasi_point');
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
        Schema::dropIfExists('reputasi_point');
    }
}
