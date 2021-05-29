<?php


namespace App\pattern\Composite;


use Illuminate\Support\Str;

class Card implements ProductInterface
{
    public $products = [];
    public function ModelProduct()
    {
        Str::JSON_P($this->products);
    }
    public function addItem(ProductInterface $product)
    {
        return $this->products[] = $product;
    }
    public function deleteItem(int $id)
    {
        unset($this->products[$id]);
    }
}
