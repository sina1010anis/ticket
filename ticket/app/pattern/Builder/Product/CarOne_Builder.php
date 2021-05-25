<?php


namespace App\pattern\Builder\Product;


class CarOne_Builder
{
    public $data = [];

    public function installCar($name,$val)
    {
        $this->data[$name] = $val;
    }
    public function Show()
    {
        echo get_class();
    }
}
