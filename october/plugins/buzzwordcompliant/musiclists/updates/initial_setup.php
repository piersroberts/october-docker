<?php namespace BuzzwordCompliant\MusicLists\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class InitialSetup extends Migration
{
    public function up()
    {
        Schema::create('musiclists.artists', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name');
            $table->string('slug')->index();
            $table->timestamps();
        });

        Schema::create('musiclists.albums', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name');
            $table->string('slug')->index();
            $table->integer('artist_id')->unsigned();
            $table->foreign('artist_id')->references('id')->on('artists');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::drop('musiclists.artists');
        Schema::drop('musiclists.albums');
    }
}