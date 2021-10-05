<?php namespace Watchlearn\Photos\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateWatchlearnPhotos extends Migration
{
    public function up()
    {
        Schema::create('watchlearn_photos_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->text('photo_name');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('watchlearn_photos_');
    }
}
