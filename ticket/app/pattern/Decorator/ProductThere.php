<?php


namespace App\pattern\Decorator;


class ProductThere
{
    public $data;
    public function __construct(ClassInterface $data)
    {
        $this->data = $data;
    }

    public function GetPrice()
    {
        return 38 + $this->date->GetPrice();
    }

    public function GetName()
    {
        return 'Product There' . $this->data->GetName();
    }
}
