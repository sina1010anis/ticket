<?php


namespace App\pattern\Builder;


use App\pattern\Builder\Product\CarOne_Builder;
use App\pattern\Builder\Product\CarTow_Builder;

class Car_Builder implements CreateCarInterface
{
    public $type;
    public function __construct()
    {
        $this->type = new CarTow_Builder();
    }

    public function createCar()
    {
        $this->type->installCar('Set Car' , 'Ok New Car');
    }

    public function SetDoor()
    {
        $this->type->installCar('Door' , 'Ok Install');
    }

    public function SetBody()
    {
        $this->type->installCar('Body' , 'Ok Install');
    }

    public function SetColor()
    {
        $this->type->installCar('Color' , 'Ok Install');
    }

    public function TestCar()
    {
        $this->type->installCar('Test' , 'Pass Test');
    }

    public function GetCar()
    {
        return $this->type->data;
    }
}
