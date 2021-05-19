<?php


namespace App\View;


use Illuminate\View\View;

class title
{
    public function compose(View $view)
    {
        return $view->with('title' , 'بلیط ماهان');
    }
}
