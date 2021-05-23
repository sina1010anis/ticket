<?php


namespace App\purchase;


interface Bank
{
    public function send();
    public function verify($price);
    public function price($price);
}
