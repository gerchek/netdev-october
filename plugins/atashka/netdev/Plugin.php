<?php namespace Atashka\Netdev;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
        return [
            \Atashka\Netdev\Components\Contact::class => 'contact'
        ];
    }

    public function registerSettings()
    {
    }
}
