<?php


namespace App\pattern\TestProject\OrderPizza;


class Reception
{
    public $pizza;

    public function __construct()
    {
        $pizza = new InstallOrder();
        $this->pizza = $pizza;
    }
    public function Show(){
        $this->pizza->NamePizza();
        $this->pizza->AddDough();
        $this->pizza->AddIngredients();
        $this->pizza->InsideOven();
        $this->pizza->SendOrder();
        return $this->pizza->GetPizza();
    }
}
