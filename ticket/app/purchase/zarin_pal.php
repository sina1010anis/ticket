<?php


namespace App\purchase;

use Zarinpal\Zarinpal;
class zarin_pal implements Bank
{
    public $id ;
    public function __construct($id)
    {
        return $this->id = $id;
    }

    public function send($price)
    {
        $zarinpal = new Zarinpal($this->id);
        //$zarinpal->enableSandbox();
        $zarinpal->isZarinGate();
        $results = $zarinpal->request(
            route('verifyPay'),
            $price,
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
        $ms = $zarinpal->verify('OK', $price, $authority);
        if ($ms['Status'] == 'success'){
            echo 'ok';
        }else{
            echo 'no';
        }
/*        if ($_POST['Status']=='OK'){
            print_r($zarinpal->verify('OK', $price, $authority));
        }else{
            echo 'NO';
        }*/
    }
}
