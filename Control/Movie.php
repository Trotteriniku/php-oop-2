<?php
include __DIR__ . "/Product.php";
include __DIR__ . "/../Traits/DrawCard.php";
class Movie extends Product
{
    use DrawCard;
    // trascritte le relative proprietà che verranno assegnate ad ogni istanza creata
    private int $id;
    private string $title;
    private string $overview;
    private string $vote_average;
    private string $poster_path;
    private string $original_language;


    // dichiarazione tramite funzione del primo construttore che prendera i vari dati e poprietà
    function __construct($id, $title, $overview, $vote, $image, $language)
    {
        parent::__construct();
        $this->id = $id;
        $this->title = $title;
        $this->overview = $overview;
        $this->vote_average = $vote;
        $this->poster_path = $image;
        $this->original_language = $language;
    }

    // metodo utilizzato per trascrivere il $vote value in stelle da 1 a 5
    public function getVote()
    {
        $vote = ceil($this->vote_average / 2);
        $template = "<p>";
        for ($n = 1; $n <= 5; $n++) {
            $template .= ($n <= $vote) ? '<i class="fa-solid fa-star"></i>' : '<i class="fa-regular fa-star"></i>';
        }
        $template .= "</p>";
        return $template;
    }

    // metodo utilizzato per stampare i vari dati in delle apposite card con l'ausilio di diverse variabili riprese tramite l'include su card.php
    public function formatCard()
    {
        $cardItem = [
            'price' => $this->price,
            'image' => $this->poster_path,
            'quantity' => $this->quantity,
            'title' => $this->title,
            'content' => substr($this->overview, 0, 100) . '...',
            'custom' => $this->getVote()
        ];
        return $cardItem;
    }

}
// trascrizione in stringa dell'array json citato 
$movieString = file_get_contents(__DIR__ . '/../Model/db.json');

// decodifica della stringa sopracitata per trasformarla in array php
$movieList = json_decode($movieString, true);


// array che conterra tutti gli attributi
$movies = [];


// ciclo il quale si appella all'array per leggere/ prendere tutti i valori per poi inserirli nel metodo sopracitato
foreach ($movieList as $item) {
    $movies[] = new Movie($item['id'], $item['title'], $item['overview'], $item['vote_average'], $item['poster_path'], $item['original_language']);
}

?>