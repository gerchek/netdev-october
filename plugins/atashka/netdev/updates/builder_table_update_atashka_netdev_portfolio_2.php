<?php namespace Atashka\Netdev\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAtashkaNetdevPortfolio2 extends Migration
{
    public function up()
    {
        Schema::table('atashka_netdev_portfolio', function($table)
        {
            $table->text('project');
            $table->text('done');
            $table->text('deadline');
            $table->text('year');
            $table->text('sectiontitle');
            $table->text('aboutsection');
        });
    }
    
    public function down()
    {
        Schema::table('atashka_netdev_portfolio', function($table)
        {
            $table->dropColumn('project');
            $table->dropColumn('done');
            $table->dropColumn('deadline');
            $table->dropColumn('year');
            $table->dropColumn('sectiontitle');
            $table->dropColumn('aboutsection');
        });
    }
}
