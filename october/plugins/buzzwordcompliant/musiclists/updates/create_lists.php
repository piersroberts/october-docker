<?php namespace BuzzwordCompliant\MusicLists\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreateLists extends Migration
{
    public function up()
    {
        Schema::create('ml_publications', function ($table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name');
            $table->string('slug')->index();

        });
        Schema::create('ml_album_lists', function ($table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name');
            $table->string('source')->nullable();
            $table->integer('publication_id')->unsigned();
            $table->foreign('publication_id')->references('id')->on('ml_publications');
            $table->date('publication_date')->nullable();
            $table->timestamps();
            $table->string('slug')->index();

        });

        Schema::create('ml_album_list_items', function ($table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('position');
            $table->integer('album_id')->unsigned();
            $table->foreign('album_id')->references('id')->on('ml_albums');
            $table->integer('album_list_id')->unsigned();
            $table->foreign('album_list_id')->references('id')->on('ml_album_lists');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::drop('ml_album_lists');
        Schema::drop('ml_album_list_items');
        Schema::drop('ml_publications');

    }
}