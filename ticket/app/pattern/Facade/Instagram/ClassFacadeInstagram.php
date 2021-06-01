<?php


namespace App\pattern\Facade\Instagram;


class ClassFacadeInstagram implements \App\pattern\Facade\FacadeInterface
{

    public function sendMessage($msg)
    {
        echo 'Is Message App Instagram'.$msg.'<br>';
    }

    public function setName()
    {
        echo 'App Name'.get_class().'<br>';
    }
}
