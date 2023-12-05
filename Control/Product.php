<?php
class Product
{
    public int $price;
    public int $quantity;
    public function __construct()
    {
        $this->price = rand(0, 100);
        $this->quantity = rand(0, 100);

    }

    public function printCard()
    {
        $price = $this->price;
        $quantity = $this->quantity;
        include __DIR__ . '/../Views/card.php';
    }



}
?>