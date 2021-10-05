<?php namespace Watchlearn\Photos\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateWatchlearnPhotos extends Migration
{
    public function up()
    {
        Schema::table('watchlearn_photos_', function($table)
        {
            $table->timestamp('deleted_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('watchlearn_photos_', function($table)
        {
            $table->dropColumn('deleted_at');
        });
    }
}
