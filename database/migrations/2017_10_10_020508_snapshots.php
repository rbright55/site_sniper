<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Snapshots extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('snapshots', function(Blueprint $table){
            $table->increments('id');
            $table->string('name')->nullable();
            $table->string('url');
            $table->string('domain');
            $table->integer('user_id')->unsigned()->nullable();
            $table->integer('file_id')->unsigned();
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::table('snapshots', function ($table) {
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('file_id')->references('id')->on('files');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('snapshots', function ($table) {
            $table->dropForeign(['user_id']);
            $table->dropForeign(['file_id']);
        });
        Schema::dropIfExists('snapshots');
    }
}
