<?php


namespace App\pattern\Builder\Product;


class CarTow_Builder
{
    public $data = [];

    public function installCar($name,$val)
    {
        $this->data[$name] = $val;
    }
    public function Show()
    {
        return $this->data;
    }
}
