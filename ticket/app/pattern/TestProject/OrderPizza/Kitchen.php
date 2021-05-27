<?php


namespace App\pattern\TestProject\OrderPizza;


class Kitchen implements KitchenInterface
{
    public $order=[];

    public function SetOrder($item)
    {
        $this->order[] = $item;
    }
}
