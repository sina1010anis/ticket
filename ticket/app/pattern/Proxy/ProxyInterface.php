<?php


namespace App\pattern\Proxy;


interface ProxyInterface
{
    public function register(string $name ,string $pass ,string $email ,int $mobile);
    public function login(string $name);
    public function logout($id);
}
