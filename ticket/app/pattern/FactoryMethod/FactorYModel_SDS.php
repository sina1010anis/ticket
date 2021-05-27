<?php


namespace App\pattern\FactoryMethod;


class FactorYModel_SDS extends FactoryAbstract
{

    public function ShowModel()
    {
        return new Model_SDS();
    }
}
