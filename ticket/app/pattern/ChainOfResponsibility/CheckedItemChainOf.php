<?php


namespace App\pattern\ChainOfResponsibility;


abstract class CheckedItemChainOf
{
    public function next(ItemChainOfInterface $itemChainOf)
    {
        $itemChainOf->check($itemChainOf);
    }
}
