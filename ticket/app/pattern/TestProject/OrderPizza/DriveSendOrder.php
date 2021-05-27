<?php


namespace App\pattern\TestProject\OrderPizza;


class DriveSendOrder implements Post
{
    public $data;

    public function __construct()
    {
        $data = new Kitchen();
        $this->data = $data;
    }

    public function SendOrder(bool $type = false)
    {
        if ($type){
            $this->data->SetOrder('Your order is in the restaurant');
        }else{
            $this->data->SetOrder('Outside the restaurant');
        }
    }
}
