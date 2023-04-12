<?php namespace Atashka\Netdev\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAtashkaNetdevOurServices extends Migration
{
    public function up()
    {
        Schema::table('atashka_netdev_our_services', function($table)
        {
            $table->renameColumn('service', 'text');
        });
    }
    
    public function down()
    {
        Schema::table('atashka_netdev_our_services', function($table)
        {
            $table->renameColumn('text', 'service');
        });
    }
}
