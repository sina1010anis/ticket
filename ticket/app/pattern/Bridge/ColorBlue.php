<?php


namespace App\pattern\Bridge;


use Illuminate\Support\Str;

class ColorBlue extends CarColor
{
    public function gatColor()
    {
        echo ' Color : Blue';
    }
}
