<?php namespace Atashka\Netdev\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAtashkaNetdevPortfolio extends Migration
{
    public function up()
    {
        Schema::table('atashka_netdev_portfolio', function($table)
        {
            $table->text('tags')->nullable(false)->unsigned(false)->default(null)->comment(null)->change();
        });
    }
    
    public function down()
    {
        Schema::table('atashka_netdev_portfolio', function($table)
        {
            $table->string('tags', 255)->nullable(false)->unsigned(false)->default(null)->comment(null)->change();
        });
    }
}
