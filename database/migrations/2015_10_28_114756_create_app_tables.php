<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAppTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('apps', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('publish');
            $table->integer('user');
            $table->string('app_name');
            $table->string('app_slug');
            $table->string('intro_description');
            $table->text('full_description');
            $table->timestamps();
        });

        Schema::create('types', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('platform');
            $table->string('file_extension');
            $table->timestamps();
        });

        Schema::create('app_type', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('type_id')->unsigned()->index();
            $table->foreign('type_id')->references('id')->on('types');
            $table->integer('app_id')->unsigned()->index();
            $table->foreign('app_id')->references('id')->on('apps');
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
        Schema::drop('apps');
        Schema::drop('types');
        Schema::drop('app_type');
    }
}
