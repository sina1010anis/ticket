<?php


namespace App\pattern\Bridge;


class CarTow implements CarModel
{
    public function getModel()
    {
        echo ' Car : Benz';
    }
}
