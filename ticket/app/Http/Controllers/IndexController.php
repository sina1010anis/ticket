<?php

namespace App\Http\Controllers;

use App\Models\buy;
use App\Models\ticket;
use App\pattern\Builder\Car_Bind;
use App\pattern\Builder\Car_Builder;
use App\pattern\Builder\Product\CarOne_Builder;
use App\pattern\T1\Logout;
use App\pattern\T1\Register;
use App\pattern\T1\Verify;
use App\pattern\AbstractFactory\AbstractClass;
use App\pattern\AbstractFactory\CarOne;
use App\purchase\Bank;
use App\Repository\Index;
use Illuminate\Http\Request;
use PHPUnit\Framework\TestCase;

class IndexController extends TestCase
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
        /*
        // abstract factory
        $abstractClass = new AbstractClass(5000000);
        $myCar = $abstractClass->CreateCarOne();
        echo $myCar->CarClass();
        */

        // builder
        $builder = new Car_Bind(new Car_Builder());
        echo '<pre>';
        print_r($builder->CarShow());
        echo '</pre>';

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
