<?php


namespace App\pattern\Composite;


interface PackagedInterface
{
    public function BoxingPrice(int $total_price);
    public function GetPriceBoxing();
}
