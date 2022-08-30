<?php

namespace Nezyr;

use pocketmine\plugin\PluginBase;

class Main extends PluginBase{
    /** @var Main */
    public static $main;
    public function onEnable(): void
    {
        self::$main = $this;
    }
}