<?php


namespace App\pattern\Composite;


class Mobile implements ProductInterface
{
    public $name;
    public $price;
    public function __construct($sss , $price)
    {
        $this->name = $sss;
        $this->price = $price;
    }

    public function ModelProduct()
    {
        return $this->sss;
    }

    public function GetPrice()
    {
        return $this->price;
    }
}
