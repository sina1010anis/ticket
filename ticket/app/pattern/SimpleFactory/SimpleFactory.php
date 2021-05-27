<?php


namespace App\pattern\SimpleFactory;


class SimpleFactory
{
    public function classItem(SimpleInterface $simple)
    {
        return $simple;
    }
}
