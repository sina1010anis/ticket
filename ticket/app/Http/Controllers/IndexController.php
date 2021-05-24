<?php

namespace App\Http\Controllers;

use App\Models\buy;
use App\Models\ticket;
use App\purchase\Bank;
use App\Repository\Index;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public $rep;
    public function __construct(Index $index)
    {
        $this->rep = $index;
    }
    public function index()
    {
        return view('front.section.index');
    }
    public function viewTicket(Request $request){
        return $this->rep->viewTicket($request);
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
