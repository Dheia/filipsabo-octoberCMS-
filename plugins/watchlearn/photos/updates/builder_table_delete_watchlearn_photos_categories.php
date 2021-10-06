<?php namespace Watchlearn\Photos\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableDeleteWatchlearnPhotosCategories extends Migration
{
    public function up()
    {
        Schema::dropIfExists('watchlearn_photos_categories');
    }
    
    public function down()
    {
        Schema::create('watchlearn_photos_categories', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->text('category_name');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
}
