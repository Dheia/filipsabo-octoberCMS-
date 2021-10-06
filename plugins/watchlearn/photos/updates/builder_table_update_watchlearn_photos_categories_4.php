<?php namespace Watchlearn\Photos\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateWatchlearnPhotosCategories4 extends Migration
{
    public function up()
    {
        Schema::table('watchlearn_photos_categories', function($table)
        {
            $table->text('photo_name')->nullable()->change();
        });
    }
    
    public function down()
    {
        Schema::table('watchlearn_photos_categories', function($table)
        {
            $table->text('photo_name')->nullable(false)->change();
        });
    }
}
