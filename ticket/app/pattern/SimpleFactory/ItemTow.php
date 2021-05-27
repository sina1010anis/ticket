<?php


namespace App\pattern\SimpleFactory;


class ItemTow implements SimpleInterface
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
