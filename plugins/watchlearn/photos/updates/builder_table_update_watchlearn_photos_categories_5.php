<?php namespace Watchlearn\Photos\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateWatchlearnPhotosCategories5 extends Migration
{
    public function up()
    {
        Schema::table('watchlearn_photos_categories', function($table)
        {
            $table->string('slug')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('watchlearn_photos_categories', function($table)
        {
            $table->dropColumn('slug');
        });
    }
}
