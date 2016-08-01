<?php namespace BuzzwordCompliant\MusicLists\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class InitialSetup extends Migration
{
    public function up()
    {
        Schema::create('ml_artists', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name');
            $table->string('slug')->index();
            $table->timestamps();
        });

        Schema::create('ml_albums', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name');
            $table->date('release_date')->nullable();
            $table->string('slug')->index();
            $table->integer('artist_id')->unsigned();
            $table->foreign('artist_id')->references('id')->on('ml_artists');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::drop('ml_artists');
        Schema::drop('ml_albums');
    }
}