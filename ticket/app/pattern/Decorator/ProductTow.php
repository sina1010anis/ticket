<?php


namespace App\pattern\Decorator;


class ProductTow implements ClassInterface
{
    public $data;
    public function __construct(ClassInterface $data)
    {
        $this->data = $data;
    }

    public function GetPrice()
    {
        return 15 + $this->GetPrice();
    }

    public function GetName()
    {
        return 'Product Tow' . $this->GetName();
    }
}
