<?php


namespace App\pattern\ChainOfResponsibility;


class login extends CheckedItemChainOf implements ItemChainOfInterface
{
    public function check(ItemChainOfInterface $itemChainOf)
    {
        $itemCheck = new ItemCheck();
        if (!$itemCheck->login){
            throw new \Exception('Oh NO LOGIN');
        }else{
            $this->next($itemChainOf);
        }
    }
}
