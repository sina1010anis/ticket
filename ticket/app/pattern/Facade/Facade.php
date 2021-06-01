<?php


namespace App\pattern\Facade;


use App\pattern\Facade\Instagram\ClassFacadeInstagram;
use App\pattern\Facade\Signal\ClassFacadeSignal;
use App\pattern\Facade\Telgram\ClassFacadeTelgram;

class Facade implements FacadeInterface
{
    private $classFacadeTelgram;
    private $classFacadeInstagram;
    private $classFacadeSignal;
    protected $NameClass;

    public function __construct()
    {
        $this->classFacadeTelgram = new ClassFacadeTelgram;
        $this->classFacadeInstagram =new ClassFacadeInstagram;
        $this->classFacadeSignal = new ClassFacadeSignal;
    }

    public function sendMessage($msg)
    {
        $this->classFacadeInstagram->sendMessage($msg);
        $this->classFacadeSignal->sendMessage($msg);
        $this->classFacadeTelgram->sendMessage($msg);
        $this->NameClass = $msg;
        return $this;
    }

    public function setName()
    {
        $this->classFacadeInstagram->setName();
        $this->classFacadeSignal->setName();
        $this->classFacadeTelgram->setName();
    }
    public function __toString()
    {
        return $this->NameClass;
    }
}
