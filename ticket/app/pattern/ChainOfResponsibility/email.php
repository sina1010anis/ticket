<?php


namespace App\pattern\ChainOfResponsibility;


class email extends CheckedItemChainOf implements ItemChainOfInterface
{

    public function check(ItemChainOfInterface $itemChainOf)
    {
        $itemCheck = new ItemCheck();
        if (!$itemCheck->email){
            throw new \Exception('Oh NO EMAIL');
        }else{
            $this->next($itemChainOf);
        }
    }
}
