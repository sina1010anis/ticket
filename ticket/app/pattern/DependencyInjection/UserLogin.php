<?php


namespace App\pattern\DependencyInjection;


class UserLogin implements UserLoginInterface
{
    private $data;
    public function __construct(AuthUser $authUser)
    {
        $this->data =$authUser;
    }

    public function setUser()
    {
        return [
            'Name' =>$this->data->getName(),
            'Password' =>$this->data->getPassword(),
            'Mobile' =>$this->data->getMobile(),
            'Email' =>$this->data->getEmil(),
        ];
    }
}
