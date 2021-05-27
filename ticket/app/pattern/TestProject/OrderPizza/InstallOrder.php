<?php


namespace App\pattern\TestProject\OrderPizza;


class InstallOrder implements OrderPizza,Post
{
    public $item;

    public function __construct()
    {
        $item = new Kitchen();
        $this->item = $item;
    }

    public function NamePizza()
    {
        $this->item->SetOrder('Simple');
    }

    public function AddDough()
    {
        $this->item->SetOrder('Add Dough');
    }

    public function AddIngredients()
    {
        $this->item->SetOrder('Add Bologna');
    }

    public function InsideOven()
    {
        $this->item->SetOrder('It was cooked');
    }
    public function SendOrder(bool $type = false)
    {
        if ($type){
            $this->item->SetOrder('Your order is in the restaurant');
        }else{
            $this->item->SetOrder('Outside the restaurant');
        }
    }
    public function GetPizza()
    {
        return $this->item->order;
    }
}
