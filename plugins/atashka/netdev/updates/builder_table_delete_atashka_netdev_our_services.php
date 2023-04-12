<?php namespace Atashka\Netdev\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableDeleteAtashkaNetdevOurServices extends Migration
{
    public function up()
    {
        Schema::dropIfExists('atashka_netdev_our_services');
    }
    
    public function down()
    {
        Schema::create('atashka_netdev_our_services', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->text('name');
            $table->text('text');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
}
