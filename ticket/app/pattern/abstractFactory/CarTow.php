<?php


namespace App\pattern\abstractFactory;


class CarTow implements CarInterface
{
    public $price;
    public $tax;

    public function __construct($price ,$tax)
    {
        $this->price = $price;
        $this->tax = $tax;
    }

    public function CarClass()
    {
        return ($this->price + 8000) / $this->tax;
    }
}
