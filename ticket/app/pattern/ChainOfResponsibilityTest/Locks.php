<?php


namespace App\pattern\ChainOfResponsibilityTest;


class Locks extends HomeChecker
{
    public function check(HomeStatus $home)
    {
        if (!$home->locks) {
            echo 'oh no not locks';
        }
        $this->next($home);
    }
}
