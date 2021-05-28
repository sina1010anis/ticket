<?php


namespace App\pattern\Bridge;


class FactoryClassPatternBridge
{
    public function GetCar(CarModel $carModel , CarColor $carColor){
        return $carColor->gatColor() . ' ' . $carModel->getModel();
    }
}
