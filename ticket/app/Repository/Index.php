<?php


namespace App\Repository;


use App\Models\itemFilter;
use App\Models\ticket;
use App\Models\titleFilter;
use Illuminate\Http\Request;

class Index
{
    public function viewTicket(Request $request){
        $title_filter = titleFilter::whereType($request->type_select)->get();
        $item_filter = itemFilter::all();
        //$ticket = ticket::orderBy('id' , 'desc')->get();
        $ticket = ticket::whereTransportation_type($request->type_select)->whereWay($request->Send)->whereCity_id_back($request->city_back)->whereCity_id_next($request->city_next)->orderBy('id' , 'desc')->get();
        //$ticket = ticket::whereTransportation_type($request->type_select)->whereWay($request->Send)->whereCity_id_back($request->city_back)->whereCity_id_next($request->city_next)->orderBy('id' , 'desc')->get();
        return view('front.section.view' , compact('title_filter' , 'item_filter','ticket'))->with(['send' => $request->Send]);
    }
}
