<?php namespace Watchlearn\Photos\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateWatchlearnPhotos6 extends Migration
{
    public function up()
    {
        Schema::table('watchlearn_photos_', function($table)
        {
            $table->string('slug')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('watchlearn_photos_', function($table)
        {
            $table->dropColumn('slug');
        });
    }
}
