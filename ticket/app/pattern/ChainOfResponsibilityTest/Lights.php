<?php


namespace App\pattern\ChainOfResponsibilityTest;


class Lights extends HomeChecker
{
    public function check(HomeStatus $home)
    {
        if (!$home->lightsOff) {
            echo 'oh no not lights';
        }
        $this->next($home);
    }
}
