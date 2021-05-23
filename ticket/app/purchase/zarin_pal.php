<?php


namespace App\purchase;

use Zarinpal\Zarinpal;
class zarin_pal implements Bank
{
    public $id ;
    public $price ;
    public function __construct($id)
    {
        return $this->id = $id;
    }
    public function price($price){
        $this->price = $price;
    }
    public function send()
    {
        $zarinpal = new Zarinpal($this->id);
        //$zarinpal->enableSandbox();
        $zarinpal->isZarinGate();
        $results = $zarinpal->request(
            route('verifyPay'),
            $this->price,
            'testing',
            'me@example.com',
            '09000000000',
        );
        echo json_encode($results);
        if (isset($results['Authority'])) {
            file_put_contents('Authority', $results['Authority']);
            $zarinpal->redirect();
        }
    }

    public function verify($price)
    {
        $zarinpal = new Zarinpal($this->id);
        $authority = file_get_contents('Authority');
        echo '<pre>';
        print_r($zarinpal->verify('OK',$price, $authority));
        echo '</pre>';
    }
}
