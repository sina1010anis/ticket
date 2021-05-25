<?php


namespace App\pattern\AbstractFactory;


class CarOne implements CarInterface
{
    public $price;

    public function __construct($price)
    {
        $this->price = $price;
    }

    public function CarClass()
    {
        return $this->price + 5000;
    }
}
