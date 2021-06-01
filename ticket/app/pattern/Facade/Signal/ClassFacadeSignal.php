<?php


namespace App\pattern\Facade\Signal;


class ClassFacadeSignal implements \App\pattern\Facade\FacadeInterface
{

    public function sendMessage($msg)
    {
        echo 'Is Message App Signal'.$msg.'<br>';
    }

    public function setName()
    {
        echo 'App Name'.get_class().'<br>';
    }
}
