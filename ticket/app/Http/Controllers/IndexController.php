<?php

namespace App\Http\Controllers;

use App\Models\buy;
use App\Models\itemFilter;
use App\Models\ticket;
use App\Models\titleFilter;
use App\purchase\Bank;
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
        $ticket = ticket::orderBy('id' , 'desc')->get();
        //$ticket = ticket::whereTransportation_type($request->type_select)->whereWay($request->Send)->whereCity_id_back($request->city_back)->whereCity_id_next($request->city_next)->orderBy('id' , 'desc')->get();
        //$ticket = ticket::whereTransportation_type($request->type_select)->whereWay($request->Send)->whereCity_id_back($request->city_back)->whereCity_id_next($request->city_next)->orderBy('id' , 'desc')->get();
        return view('front.section.view' , compact('title_filter' , 'item_filter','ticket'))->with(['send' => $request->Send]);
    }
    public function test(){
    }
    public function sendPay(Bank $bank , ticket $id ,\App\DB\Create\buy $buy){
        $buy->create($id->price,$id->id);
        $bank->price($id->price);
        $bank->send();
    }
    public function verifyPay(Bank $bank)
    {
        $price = buy::orderBy('id' , 'desc')->whereUser_id(5)->first();
        $bank->verify($price->total_price);
    }
}
