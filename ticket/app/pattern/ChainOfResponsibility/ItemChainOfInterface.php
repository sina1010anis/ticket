<?php


namespace App\pattern\ChainOfResponsibility;


interface ItemChainOfInterface
{
    public function check(ItemChainOfInterface $itemChainOf);
}
