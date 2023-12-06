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





}
?>