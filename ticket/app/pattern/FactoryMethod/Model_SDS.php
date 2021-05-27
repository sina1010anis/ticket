<?php


namespace App\pattern\FactoryMethod;


class Model_SDS implements Factory
{

    public function setModel()
    {
        return 'SDS : Good Model';
    }
}
