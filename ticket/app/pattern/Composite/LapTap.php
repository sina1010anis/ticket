<?php


namespace App\pattern\Composite;


class LapTap implements ProductInterface
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
        return $this->name;
    }

    public function GetPrice()
    {
        return $this->price;
    }
}
