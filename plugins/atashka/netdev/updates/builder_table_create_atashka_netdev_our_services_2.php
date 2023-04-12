<?php namespace Atashka\Netdev\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateAtashkaNetdevOurServices2 extends Migration
{
    public function up()
    {
        Schema::create('atashka_netdev_our_services', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->text('name');
            $table->text('service');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('atashka_netdev_our_services');
    }
}
