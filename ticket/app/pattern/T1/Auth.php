<?php


namespace App\pattern\T1;


abstract class Auth implements Loger
{
    abstract public function log($name);
}
