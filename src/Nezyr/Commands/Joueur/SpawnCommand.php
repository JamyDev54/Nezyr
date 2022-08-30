<?php

namespace Nezyr\Commands\Joueur;

use Nezyr\Commands\NezyrCommand;
use Nezyr\Models\PlayerManager;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;

class SpawnCommand extends Command{
    use NezyrCommand;

    public function __construct() {
        parent::__construct("spawn", "Permet de se téléporter", "/spawn", []);
    }

    public function execute(CommandSender $sender, string $commandLabel, array $args)
    {
        if ($sender instanceof PlayerManager) {
            $sender->teleport($sender->getServer()->getWorldManager()->getDefaultWorld()->getSpawnLocation());
        }
    }
}