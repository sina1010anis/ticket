<?php

namespace App\Http\Controllers;

use App\Models\buy;
use App\Models\product_test;
use App\Models\sub_product_test;
use App\Models\ticket;
use App\Models\User;
use App\pattern\Adapter\CarBenzAdapter;
use App\pattern\Bridge\CarTow;
use App\pattern\Bridge\ColorBlue;
use App\pattern\Bridge\ColorRed;
use App\pattern\Builder\Car_Bind;
use App\pattern\Builder\Car_Builder;
use App\pattern\Builder\Product\CarOne_Builder;
use App\pattern\ChainOfResponsibility\CheckedItemChainOf;
use App\pattern\ChainOfResponsibility\door;
use App\pattern\ChainOfResponsibility\email;
use App\pattern\ChainOfResponsibility\ItemCheck;
use App\pattern\ChainOfResponsibility\login;
use App\pattern\ChainOfResponsibility\roof;
use App\pattern\ChainOfResponsibility\StatusChainOf;
use App\pattern\ChainOfResponsibility\windows;
use App\pattern\ChainOfResponsibilityTest\Alarm;
use App\pattern\ChainOfResponsibilityTest\HomeStatus;
use App\pattern\ChainOfResponsibilityTest\Lights;
use App\pattern\ChainOfResponsibilityTest\Locks;
use App\pattern\Composite\Card;
use App\pattern\Composite\LapTap;
use App\pattern\Composite\Mobile;
use App\pattern\Composite\Packaged;
use App\pattern\Decorator\ProductOne;
use App\pattern\Decorator\ProductThere;
use App\pattern\Decorator\ProductTow;
use App\pattern\DependencyInjection\AuthUser;
use App\pattern\DependencyInjection\UserLogin;
use App\pattern\Facade\Facade;
use App\pattern\FactoryMethod\FactorYModel_MT1;
use App\pattern\FactoryMethod\FactorYModel_SDS;
use App\pattern\Fluent\FluentClass;
use App\pattern\ProtoType\Author;
use App\pattern\ProtoType\Page;
use App\pattern\Proxy\AuthProxy;
use App\pattern\Proxy\ClassProxy;
use App\pattern\SimpleFactory\ItemOne;
use App\pattern\SimpleFactory\SimpleFactory;
use App\pattern\StaticFactory\ClassStaticFactory;
use App\pattern\StaticFactory\StaticFactoryCarOne;
use App\pattern\StaticFactory\StaticFactoryCarTow;
use App\pattern\T1\Logout;
use App\pattern\T1\Register;
use App\pattern\T1\Verify;
use App\pattern\AbstractFactory\AbstractClass;
use App\pattern\AbstractFactory\CarOne;
use App\pattern\TestProject\FunctionClass\Arrey\DeleteNumber\DeleteNumberClass;
use App\pattern\TestProject\OrderPizza\Factory;
use App\pattern\TestProject\OrderPizza\InstallOrder;
use App\pattern\TestProject\OrderPizza\Kitchen;
use App\pattern\TestProject\OrderPizza\Reception;
use App\purchase\Bank;
use App\Repository\Index;
use Database\Factories\ProductTestFactory;
use Database\Factories\SubProductTestFactory;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use PHPUnit\Framework\TestCase;

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

    public function viewTicket(Request $request)
    {
        return $this->rep->viewTicket($request);
    }


    /**
     * @throws \Exception
     */
    public function test()
    {
        /*
        // abstract factory
        $abstractClass = new AbstractClass(5000000);
        $myCar = $abstractClass->CreateCarOne();
        echo $myCar->CarClass();
        */
        //--------------------------------------------------------------------------------
        // builder
        /*        $builder = new Car_Bind(new Car_Builder());
                echo '<pre>';
                print_r($builder->CarShow());
                echo '</pre>';*/
        //--------------------------------------------------------------------------------

        //factory method
        /*        $factory = new FactorYModel_SDS();
                $model_factory = $factory->ShowModel();
                echo $model_factory->setModel();*/
        //--------------------------------------------------------------------------------

        // proto type
        /*        $author = new Author();
                $page = new Page('AY test','lorem test in page proto type',$author);
                $author->userName('sina');
                for ($i=0;$i<5;$i++){
                    $page->setComment('User NAme'.rand(10,20));
                }
                $df = clone $page;
                $page->setComment('User NAme'.rand(10,20));
                echo '<pre>';
                print_r($df);
                echo '</pre>';*/
        //--------------------------------------------------------------------------------

        //Simple Factory
        /*        $simple = new SimpleFactory();
                $class = $simple->classItem(new ItemOne('Type 5'));
                echo $class->ItemClass();*/
        //--------------------------------------------------------------------------------

        //Static Factory
        /*return ClassStaticFactory::StaticFactory(new StaticFactoryCarTow());*/
        //--------------------------------------------------------------------------------

        // Adapter

        /*        $adapter = new CarBenzAdapter();
                return $adapter->Model_S();*/

        //---------------------------------------------------------------------------------

        //Project OrderPizza
        /*        $order = new Factory();
                Str::JSON_P($order->Pizza());*/
        //--------------------------------------------------------------------------------
        // bridge
        /*        $model = (new \App\pattern\Bridge\FactoryClassPatternBridge())->GetCar(new \App\pattern\Bridge\CarTow() , new ColorBlue());
                Str::JSON_P($model);*/
        //--------------------------------------------------------------------------------

        // Composite
/*        $composite = new Card();
        $boxing = new Packaged();
        $composite->addItem(new LapTap('HP envy 15 K008' , 5000));
        $composite->addItem(new Mobile('Samsung A5 2016' , 5000));
        $boxing->BoxingPrice($composite->GetPrice());
        return $composite->GetName() . '////////////////' . 'total price = ' . $composite->GetPrice().'////////////////// '.'Price Send Product ='.$boxing->GetPriceBoxing() ;*/

        //----------------------------------------------------------------------------------

        //Decorator

/*        $decorator = new ProductThere(new ProductTow(new ProductOne()));
        return $decorator->GetPrice();*/

        //-------------------------------------------------------------------------------------

        // Dependency Injection
/*        $dependency_injection = new AuthUser('Sina','sina1010anis@gamil.comg','sina1010anis','09395231890');
        $DEP_INJ = new UserLogin($dependency_injection);
        $data=$DEP_INJ->setUser();
        if ($data['Name'] == 'Sina')
            Str::JSON_P($DEP_INJ->setUser());
        else
            Str::JSON_P('No');*/

        //----------------------------------------------------------------------------------

        // Facade Design Pattern
/*        $Facade=new Facade();
        Str::JSON_P($Facade->sendMessage(' Hello World!')->setName());
        echo '<h1>'.$Facade.'</h1>';*/

        //------------------------------------------------------------------------------------

        // Fluent
/*        $fluent = new FluentClass();
        $fluent->orderBy('id' , 'desc')->where('id' , '5')->get();*/

        //-------------------------------------------------------------------------------------

        // Proxy
/*        $user = new ClassProxy();
        $user->register('sina' , '123456' , 'sina1010' , '09395231890');
        $user->register('arash' , '5689879878474' , 'arash1010' , '09100109848');
        $user->register('ali' , '5689879878474' , 'arash1010' , '09100109848');
        $user->register('ahmad' , '5689879878474' , 'arash1010' , '09100109848');
        $user->register('reza' , '5689879878474' , 'arash1010' , '09100109848');
        Str::JSON_P($user->getUsers());*/

        //------------------------------------------------------------------------------------
        $product_test = product_test::orderBy('id' , 'desc')->get();
        return view('test.Item',compact('product_test'));
    }

    public function TestProduct(product_test $name)
    {
        $sub_product = sub_product_test::orderBy('id' , 'desc')->whereProduct_test_id($name->id)->first();
        $size = sub_product_test::orderBy('id' , 'desc')->whereProduct_test_id($name->id)->get();
        return view('test.view' , compact('sub_product' , 'size'));
    }

    public function EAV(Request $request)
    {
        $item = sub_product_test::whereId($request->id)->first();
        return [
            $item->price,
            '<a href="/addCard/'.$item->id.'">????????</a>'
        ];
    }
    public function addCard()
    {

    }

    public function sendPay(Bank $bank, ticket $id, \App\DB\Create\buy $buy)
    {
        $buy->create($id->price, $id->id);
        $bank->price($id->price);
        $bank->send();
    }

    public function verifyPay(Bank $bank)
    {
        $price = buy::orderBy('id', 'desc')->whereUser_id(5)->first();
        $bank->verify($price->total_price);
    }

    public function axiosTest(Request $request)
    {
        return $request->name;
    }
}
