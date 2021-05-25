<?php


namespace App\pattern\Builder;

class Car_Bind
{
    public $builder;
    public function __construct(CreateCarInterface $createCarInterface)
    {
        $this->builder = $createCarInterface;
    }
    public function CarShow(){
        $this->builder->createCar();
        $this->builder->SetDoor();
        $this->builder->SetBody();
        $this->builder->SetColor();
        $this->builder->TestCar();
        return $this->builder->GetCar();
    }
}
