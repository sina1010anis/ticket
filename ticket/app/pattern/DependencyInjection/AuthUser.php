<?php


namespace App\pattern\DependencyInjection;


class AuthUser
{
    /**
     * @var string
     */
    private $name;
    /**
     * @var string
     */
    private $emil;
    /**
     * @var string
     */
    private $password;
    /**
     * @var string
     */
    private $mobile;

    public function __construct(string $name, string $emil, string $password, string $mobile)
    {
        $this->name = $name;
        $this->emil = $emil;
        $this->password = $password;
        $this->mobile = $mobile;
    }

    /**
     * @return string
     */
    public function getEmil(): string
    {
        return $this->emil;
    }

    /**
     * @return string
     */
    public function getMobile(): string
    {
        return $this->mobile;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getPassword(): string
    {
        return $this->password;
    }
}
