<?php
class GamesP extends Product {

    use DrawCard;
    public $data;

    public function __construct($data) {
        parent::__construct();
        $this->data = $data;
    }


    public function formatCard() {
        $itemCard = [
            'price' => $this->price,
            'quantity' => $this->quantity,
            'image' => $this->data['img_icon_url'],
            'title' => $this->data['name'],


        ];
        return $itemCard;
    }

    public static function fetchall() {
        $gamesString = file_get_contents(__DIR__."/../Model/steam_db.json");
        $gamesArray = json_decode($gamesString, true);

        $Games = [];

        foreach($gamesArray as $data) {
            $data = new GamesP($data);
            $Games[] = $data;
        }
    }


}













?>