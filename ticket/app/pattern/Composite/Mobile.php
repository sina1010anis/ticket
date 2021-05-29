<?php


namespace App\pattern\Composite;


class Mobile implements ProductInterface
{
    public $name;
    public function __construct($name)
    {
        $this->name = $name;
    }

    public function ModelProduct()
    {
        return $this->name;
    }
}
