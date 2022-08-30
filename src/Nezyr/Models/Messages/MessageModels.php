<?php

namespace Nezyr\Models\Messages;

use Nezyr\Models\PlayerManager;
use pocketmine\console\ConsoleCommandSender;

class MessageModels{
    public $messages = [
        "player_join" => "§f[§e+§f] §e{player}",
        "first_join" => "§fBienvenue à §e{player} §fsur le serveur",
        "player_quit" => "§f[§c-§f] §c{player}",
        "tp_spawn_succes" => "§eTéléportation > §fVous avez été téléporté au §1spawn §f!",
    ];

    public function getMessage(PlayerManager|ConsoleCommandSender $player, string $messages, bool $replace = false){

        if($replace === false) return $this->messages[$messages];

        if($replace === true) return str_replace(["{player}"], [$player->getName()], $this->messages[$messages]);
    }
}