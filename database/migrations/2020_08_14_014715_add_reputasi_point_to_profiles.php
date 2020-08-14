<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddReputasiPointToProfiles extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('profiles', function (Blueprint $table) {
            //
              $table->unsignedBigInteger('reputasi_point_id')->nullable();

            $table->foreign('reputasi_point_id')->references('id')->on('reputasi_point');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('profiles', function (Blueprint $table) {
            //
            $table->dropForeign(['reputasi_point']);
            $table->dropColoumn(['reputasi_point']);
        });
    }
}
