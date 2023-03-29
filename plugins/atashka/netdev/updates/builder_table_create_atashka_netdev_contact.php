<?php namespace Atashka\Netdev\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateAtashkaNetdevContact extends Migration
{
    public function up()
    {
        Schema::create('atashka_netdev_contact', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->text('name');
            $table->text('email');
            $table->text('message');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('atashka_netdev_contact');
    }
}
