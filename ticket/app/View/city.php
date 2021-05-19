<?php


namespace App\View;


class city
{
    public function compose(\Illuminate\View\View $view)
    {
        return $view->with('city' , \App\Models\city::all());
    }
}
