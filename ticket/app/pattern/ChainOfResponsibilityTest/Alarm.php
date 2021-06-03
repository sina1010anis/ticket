<?php


namespace App\pattern\ChainOfResponsibilityTest;


class Alarm extends HomeChecker
{
    public function check(HomeStatus $home)
    {
        if (!$home->alarmOff) {
            echo 'oh no not alarm';
        }
        $this->next($home);
    }
}
