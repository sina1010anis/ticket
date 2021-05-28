<?php


namespace App\pattern\Bridge;


use Illuminate\Support\Str;

class ColorRed extends CarColor
{
    public function gatColor()
    {
        echo ' Color : Red';
    }
}
