<?php namespace Atashka\Netdev\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAtashkaNetdevServices extends Migration
{
    public function up()
    {
        Schema::table('atashka_netdev_services', function($table)
        {
            $table->text('data')->nullable()->unsigned(false)->default(null)->comment(null)->change();
        });
    }
    
    public function down()
    {
        Schema::table('atashka_netdev_services', function($table)
        {
            $table->string('data', 255)->nullable()->unsigned(false)->default(null)->comment(null)->change();
        });
    }
}
