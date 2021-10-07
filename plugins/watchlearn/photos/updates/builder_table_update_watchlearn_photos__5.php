<?php namespace Watchlearn\Photos\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateWatchlearnPhotos5 extends Migration
{
    public function up()
    {
        Schema::table('watchlearn_photos_', function($table)
        {
            $table->text('photo_name');
        });
    }
    
    public function down()
    {
        Schema::table('watchlearn_photos_', function($table)
        {
            $table->dropColumn('photo_name');
        });
    }
}
