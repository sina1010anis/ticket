<?php


namespace App\pattern\ChainOfResponsibility;


class mobile extends CheckedItemChainOf implements ItemChainOfInterface
{

    public function check(ItemChainOfInterface $itemChainOf)
    {
        $itemCheck = new ItemCheck();
        if (!$itemCheck->mobile){
            throw new \Exception('Oh NO MOBILE');
        }else{
            $this->next($itemChainOf);
        }
    }
}
