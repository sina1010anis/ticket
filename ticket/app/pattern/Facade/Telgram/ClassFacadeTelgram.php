<?php

namespace App\pattern\Facade\Telgram;


class ClassFacadeTelgram implements \App\pattern\Facade\FacadeInterface
{

    public function sendMessage($msg)
    {
        echo 'Is Message App Telgrame'.$msg.'<br>';
    }

    public function setName()
    {
        echo 'App Name'.get_class().'<br>';
    }
}
