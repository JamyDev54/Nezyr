<?php

namespace Nezyr\Models\Messages;

use Nezyr\Models\PlayerManager;
use pocketmine\console\ConsoleCommandSender;

class ErrorModel{
    public function noPerms(PlayerManager|ConsoleCommandSender $player){
        $player->sendMessage("§eErreur > §cVous n'avez pas la permission de faire ceci");
    }

    public function noArgs(PlayerManager|ConsoleCommandSender $player, string $usage){
        $messages = "§eUsage > §c$usage";
        $player->sendMessage($messages);
    }

    public function custom(PlayerManager|ConsoleCommandSender $player, string $value){
        $messages = "§eUsage > §c$value";
        $player->sendMessage($messages);
    }

    public function smallCooldown(PlayerManager $player, int $time, int $type = 0, string $message = "Veillez patientez §9{time}"){
        $message = str_replace("{time}", $time, $message);

        if($type == 0) return $player->sendPopup($message);
        if($type == 1) return $player->sendMessage($message);
        if($type == 2) return $player->sendActionBarMessage($message);
        if($type == 3) return $player->sendTip($message);
    }
}