<?php


namespace App\pattern\TestProject\OrderPizza;


class Factory
{
    public $data;
    public function __construct()
    {
        $data = new Reception();
        $this->data = $data;
    }

    public function Pizza()
    {
        return $this->data->Show();
    }
}
