<?php namespace Watchlearn\Photos\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateWatchlearnPhotos3 extends Migration
{
    public function up()
    {
        Schema::table('watchlearn_photos_', function($table)
        {
            $table->text('category');
            $table->increments('id')->unsigned(false)->change();
        });
    }
    
    public function down()
    {
        Schema::table('watchlearn_photos_', function($table)
        {
            $table->dropColumn('category');
            $table->increments('id')->unsigned()->change();
        });
    }
}
