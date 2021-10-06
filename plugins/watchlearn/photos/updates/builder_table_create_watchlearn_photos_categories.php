<?php namespace Watchlearn\Photos\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateWatchlearnPhotosCategories extends Migration
{
    public function up()
    {
        Schema::create('watchlearn_photos_categories', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->text('category');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('watchlearn_photos_categories');
    }
}
