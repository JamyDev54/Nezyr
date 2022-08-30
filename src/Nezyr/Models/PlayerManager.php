<?php

namespace Nezyr\Models;

use Nezyr\Utils\Provider;
use pocketmine\player\Player;

class PlayerManager extends Player{
    public function createPlayer(){}

    public function addMoney(int $count = 0){
        $maria = Provider::database();
        $money = $this->myMoney() + $count;
        Provider::query("UPDATE player SET `money` = '".$money."' WHERE `username` = '". $this->getName(). "'");
        return true;
    }

    public function removeMoney(int $count = 0){
        $money = $this->myMoney() - $count;
        Provider::query("UPDATE player SET `money` = '".$money."' WHERE `username` = '". $this->getName(). "'");
        return true;
    }

    public function myMoney(){
        $result = Provider::database()->query("SELECT `money` FROM player WHERE `username` = '". $this->getName() . "'");
        $fetchAll = $result->fetchArray();
        return (float)$fetchAll[0];
    }
}