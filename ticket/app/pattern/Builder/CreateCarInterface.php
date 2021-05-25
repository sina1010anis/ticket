<?php


namespace App\pattern\Builder;


interface CreateCarInterface
{
    public function createCar();
    public function SetDoor();
    public function SetBody();
    public function SetColor();
    public function TestCar();
    public function GetCar();
}
