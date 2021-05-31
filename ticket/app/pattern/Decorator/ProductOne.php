<?php


namespace App\pattern\Decorator;


class ProductOne implements ClassInterface
{

    public function GetPrice()
    {
        return 25;
    }

    public function GetName()
    {
        return 'Product One';
    }
}
