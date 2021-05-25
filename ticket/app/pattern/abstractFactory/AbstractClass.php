<?php


namespace App\pattern\abstractFactory;


class AbstractClass
{
    public $price;
    public $tax = 2;
    public function __construct($price)
    {
        $this->price = $price;
    }
    public function CreateCarOne() : CarOne
    {
        return new CarOne($this->price);
    }
    public function CreateCarTow() : CarTow
    {
        return new CarTow($this->price , $this->tax);
    }
}
