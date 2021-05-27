<?php


namespace App\pattern\Adapter;


class CarBmwAdapter implements InterfaceCarBmw
{

    public function Model_X($model)
    {
        return $model.' BMW';
    }
}
