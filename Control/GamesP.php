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
            'content' => '',
            'custom' => ''

        ];
        return $itemCard;
    }

    public static function fetchall() {

        try {
            $gamesString = file_get_contents(__DIR__."/../Model/steam_db.json");
            $gamesArray = json_decode($gamesString, true);

            $Games = [];

            foreach($gamesArray as $data) {
                $data = new GamesP($data);
                $Games[] = $data;
            }
            // se si scommenta il Games null si potrà notare l'errore 
            // $Games = null;
            if($Games == null) {
                throw new Exception("Mi spiace ma c'è un errore nella fetch all");
            }
            return $Games;
        } catch (Exception $e) {
            return null;
        }

    }


}













?>