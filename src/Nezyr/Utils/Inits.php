<?php

namespace Nezyr\Utils;

use Nezyr\Commands\Joueur\PayCommand;
use Nezyr\Commands\Joueur\SpawnCommand;
use Nezyr\Main;

class Inits{
    public static function init(){
        $commands = [
            new SpawnCommand(),
            new PayCommand(),
        ];
        Main::$main->getServer()->getCommandMap()->registerAll("Nezyr", $commands);
    }
}