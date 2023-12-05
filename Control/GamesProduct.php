<?php
class GamesProduct
{
    public $data;

    public function __construct($data)
    {
        $this->data = $data;
    }
}






$gamesString = file_get_contents(__DIR__ . "/../Model/steam_db.json");
$gamesArray = json_decode($gamesString, true);

foreach ($gamesArray as $data) {
    $data = new GamesProduct($data);
}

var_dump($data);

?>