<?php


namespace App\pattern\Bridge;


class CarOne implements CarModel
{
    public function getModel()
    {
        echo ' Car : Bmw';
    }
}
