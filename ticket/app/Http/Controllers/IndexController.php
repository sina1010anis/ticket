<?php

namespace App\Http\Controllers;

use Database\Factories\TicketFactory;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        return view('front.section.index');
    }
    public function viewTicket(Request $request){
        return view('front.section.view');
    }
}
