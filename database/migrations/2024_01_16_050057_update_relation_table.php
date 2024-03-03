<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateRelationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('foto', function (blueprint $table){
            $table->foreign('user_id')->references('id')->on('users')->onUpdateCascade()->onUpdateCascade();
            $table->foreign('album_id')->references('id')->on('album')->onUpdateCascade()->onDeleteCascade();

        });
        Schema::table('like', function (blueprint $table){
            $table->foreign('user_id')->references('id')->on('users')->onUpdateCascade()->onUpdateCascade();
            $table->foreign('foto_id')->references('id')->on('foto')->onUpdateCascade()->onDeleteCascade();

        });
        Schema::table('komentar_foto', function (blueprint $table){
            $table->foreign('user_id')->references('id')->on('users')->onUpdateCascade()->onUpdateCascade();
            $table->foreign('foto_id')->references('id')->on('foto')->onUpdateCascade()->onDeleteCascade();

        });
        Schema::table('album', function (blueprint $table){
            $table->foreign('user_id')->references('id')->on('users')->onUpdateCascade()->onDeleteCascade();
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
