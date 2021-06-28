<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostTopikTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('post_topik', function (Blueprint $table) {
            $table->foreignId('post_id')->constrained('posts');
            $table->foreignId('topik_id')->constrained('topiks');
            $table->primary(['post_id', 'topik_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('post_topik');
    }
}
