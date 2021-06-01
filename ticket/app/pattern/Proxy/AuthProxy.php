<?php


namespace App\pattern\Proxy;


class AuthProxy implements ProxyInterface
{
    public $user = [];

    /*    private $userName;
        private $password;
        public function __construct($userName , $password)
        {
            $this->userName = $userName;
            $this->password = $password;
        }*/
    public function register(string $name, string $pass, string $email, int $mobile)
    {
        $this->user[] = [
          $name,
          $pass,
          $email,
          $mobile,
        ];
    }

    public function login($name)
    {
        $msg='false';
        foreach ($this->user as $i){
            if ($i[0] == $name){
                $msg= 'true';
                break;
            }
        }
        return $msg;
    }

    public function logout($name)
    {
        $msg='false';
        foreach ($this->user as $i){
            if ($i[0] == $name){
                unset($this->user[$name]);
                $msg = 'OK';
                break;
            }
        }
        return $msg;
    }

    public function getUser()
    {
        return $this->user;
    }
}
