<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAppListsTable extends Migration
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

        Schema::create('app_type', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('platform');
            $table->timestamps();
        });

        Schema::create('app_lists', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('app_type_id')->unsigned()->index();
            $table->foreign('app_type_id')->references('id')->on('app_type');
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
        Schema::drop('app_lists');
        Schema::drop('app_type');
    }
}
