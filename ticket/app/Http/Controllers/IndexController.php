<?php

namespace App\Http\Controllers;

use App\Models\itemFilter;
use App\Models\ticket;
use App\Models\titleFilter;
use Database\Factories\TicketFactory;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        return view('front.section.index');
    }
    public function viewTicket(Request $request){
        $title_filter = titleFilter::whereType($request->type_select)->get();
        $item_filter = itemFilter::all();
        $ticket = ticket::whereTransportation_type($request->type_select)->whereWay($request->Send)->whereCity_id_back($request->city_back)->whereCity_id_next($request->city_next)->orderBy('id' , 'desc')->get();
        //$ticket = ticket::whereTransportation_type($request->type_select)->whereWay($request->Send)->whereCity_id_back($request->city_back)->whereCity_id_next($request->city_next)->orderBy('id' , 'desc')->get();
        return view('front.section.view' , compact('title_filter' , 'item_filter','ticket'))->with(['send' => $request->Send]);
    }
    public function test(){
        //return TicketFactory::new()->count(100)->create();
    }
}
