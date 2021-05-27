<?php


namespace App\pattern\StaticFactory;


class ClassStaticFactory
{
    public static function StaticFactory(StaticFactoryInterface $staticFactory){
        return $staticFactory->type();
    }
}
