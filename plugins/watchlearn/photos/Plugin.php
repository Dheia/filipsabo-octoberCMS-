<?php

namespace Watchlearn\Photos;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
        return [
            'Watchlearn\Photos\Components\Photos' => 'photos'
        ];
    }

    public function registerSettings()
    {
    }
}
