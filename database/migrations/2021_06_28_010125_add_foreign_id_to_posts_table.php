<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignIdToPostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('posts', function (Blueprint $table) {
            $table->foreignId('pengguna_id')->nullable()->after('id');
            $table->foreignId('topik_id')->nullable()->after('pengguna_id');
            $table->foreignId('comment_id')->nullable()->after('topik_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('posts', function (Blueprint $table) {
            $table->dropColumn('pengguna_id');
            $table->dropColumn('topik_id');
            $table->dropColumn('comment_id');
        });
    }
}
