<?php


namespace App\pattern\T1;


class Logout extends Auth
{
    public function log($name)
    {
        return "User Is Logout : Name ".$name;
    }
}
