<?php


namespace App\pattern\Composite;


use Illuminate\Support\Str;

class Card extends AbstractCard implements ProductInterface
{
    public $products = [];
    public $total_price = 0;
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

    public function GetPrice()
    {
        $total_price=0;
        foreach ($this->products as $product){
            $total_price += $product->price;
        }
        $this->total_price = $total_price;
        return $this->total_price;
    }

    public function GetName()
    {
        $names='';
        foreach ($this->products as $product){
            $names .= $product->name . '-';
        }
        return $names;
    }
}
