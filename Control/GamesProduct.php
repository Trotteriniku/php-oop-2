<?php
// include __DIR__ . "/Product.php";
class GamesProduct
{
    public $data;

    public function __construct($data)
    {
        $this->data = $data;
    }


    public function Gamesprint()
    {

        $data = $this->data;
        include __DIR__ . "/../Views/gamescard.php";
    }


}










$gamesString = file_get_contents(__DIR__ . "/../Model/steam_db.json");
$gamesArray = json_decode($gamesString, true);

$Games = [];

foreach ($gamesArray as $data) {
    $data = new GamesProduct($data);
    $Games[] = $data;
}


?>