<?php


namespace App\purchase;


interface Bank
{
    public function send($price);
    public function verify($price);
}
