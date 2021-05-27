<?php


namespace App\pattern\Adapter;


class CarBenzAdapter implements InterfaceCarBenz
{
    public $data;
    public function __construct()
    {
        $interfaceCarBmw = new CarBmwAdapter();
        $this->data = $interfaceCarBmw;
    }

    public function Model_S()
    {
        return $this->data->Model_X('X6');
    }
}
