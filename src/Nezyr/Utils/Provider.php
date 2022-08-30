<?php

namespace Nezyr\Utils;

use http\QueryString;
use Nezyr\Main;
use pocketmine\Server;

class Provider{
    private static $database = [];
    private static $mysqli;

    public static function database(): \SQLite3{
        return new \SQLite3(Main::getInstance()->getDataFolder() . "Solaria.db");
    }

    public static function query(string $text){
        return self::database()->query($text);
    }

    public static function querie(string $text){
        Server::getInstance()->getAsyncPool()->submitTask(new QueryAsync($text));
    }
}