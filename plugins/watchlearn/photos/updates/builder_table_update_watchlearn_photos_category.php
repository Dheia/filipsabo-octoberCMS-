<?php namespace Watchlearn\Photos\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateWatchlearnPhotosCategory extends Migration
{
    public function up()
    {
        Schema::rename('watchlearn_photos_categories', 'watchlearn_photos_category');
    }
    
    public function down()
    {
        Schema::rename('watchlearn_photos_category', 'watchlearn_photos_categories');
    }
}
