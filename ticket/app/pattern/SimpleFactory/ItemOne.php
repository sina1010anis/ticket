<?php


namespace App\pattern\SimpleFactory;


class ItemOne implements SimpleInterface
{
    public $type;

    public function __construct($type)    {
        $this->type = $type;
    }

    public function ItemClass()
    {
        return $this->type;
    }
}
