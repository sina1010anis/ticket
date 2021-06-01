<?php


namespace App\pattern\Proxy;


class ClassProxy extends AuthProxy
{
    public $data = [];

    public function getUsers()
    {
        return parent::getUser();
    }
}
