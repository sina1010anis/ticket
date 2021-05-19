<?php


namespace App\View;
use App\View\title;
use Illuminate\Support\Facades\View;

class Data
{
    public function handle()
    {
        View::composer(['*'] , title::class);
        View::composer(['*'] , city::class);
    }
}
