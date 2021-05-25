<?php


namespace App\pattern\T1;


class Register extends Auth
{
    public function log($name)
    {
        return "User Is Register : Name ".$name;
    }
}
