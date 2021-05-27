<?php


namespace App\pattern\FactoryMethod;


class FactorYModel_MT1 extends FactoryAbstract
{

    public function ShowModel()
    {
        return new Model_MT1();
    }
}
