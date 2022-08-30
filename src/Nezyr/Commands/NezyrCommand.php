<?php

namespace Nezyr\Commands;

use Nezyr\Models\Messages\ErrorModel;
use Nezyr\Models\Messages\MessageModels;
use Nezyr\Utils\Provider;
use pocketmine\utils\Utils;

trait NezyrCommand{
    public function errorManager(): ErrorModel{
        return new ErrorModel();
    }

    public function messageManager(): MessageModels{
        return new MessageModels();
    }
    public function webhookManager(): MessageModels{
        return new WebHookModels();
    }

    public function database(){
        return Provider::database();
    }

    public function utils(): Utils{
        return new Utils();
    }
}