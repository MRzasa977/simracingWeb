<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddLeagueToLeaguePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('league_posts', function (Blueprint $table) {
            $table->unsignedBigInteger('league_id');
            $table->foreign('league_id')->references('id')->on('leagues');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('league_posts', function (Blueprint $table) {
            $table->dropForeign(['league_id']);
            $table->dropColumn('league_id');
        });
    }
}
