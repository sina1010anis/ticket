<?php


namespace App\pattern\Composite;


class Packaged implements PackagedInterface
{
    public $post = 0;
    public function BoxingPrice(int $total_price)
    {
        if ($total_price < 200000){
            $post = $total_price / 2;
            $total = $total_price + $post;
            $this->post = $total;
            return $total;
        }else{
            $this->post = $total_price;
            return $total_price;
        }
    }
    public function GetPriceBoxing(){
        return $this->post;
    }
}
