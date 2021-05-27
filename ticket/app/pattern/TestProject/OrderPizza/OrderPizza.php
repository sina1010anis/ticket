<?php


namespace App\pattern\TestProject\OrderPizza;


interface OrderPizza
{
    public function NamePizza();
    public function AddDough();
    public function AddIngredients();
    public function InsideOven();
    public function GetPizza();
}
