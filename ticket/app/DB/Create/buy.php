<?php


namespace App\DB\Create;


use App\Models\ticket;
use App\purchase\Bank;

class buy
{
    public function create($total_price, $ticket_id)
    {
        $buy = new \App\Models\buy();
        $buy->user_id = 5;
        $buy->total_price = $total_price;
        $buy->ticket_id = $ticket_id;
        $buy->save();
    }
}
