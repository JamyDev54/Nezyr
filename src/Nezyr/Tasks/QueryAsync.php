<?php

namespace Nezyr\Tasks;

use pocketmine\scheduler\AsyncTask;
use Nezyr\Utils\Provider;

class QueryAsync extends AsyncTask{

    /**
     * @var callable
     */
    private $text;
    private $queryRes;

    public function __construct(string $text) {
        $this->text = $text;
    }

    public function onRun(): void
    {
        $db = Provider::database();
        $this->queryRes = $db->query($this->text);
        $this->setResult($this->queryRes);
    }

    public function onCompletion(): void
    {}

    public function getRes(){
        return $this->queryRes;
    }
}