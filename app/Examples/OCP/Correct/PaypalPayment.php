<?php

namespace App\Examples\OCP\Correct;

use App\Examples\OCP\Correct\Interfaces\PayableInterface;


class PaypalPayment implements PayableInterface
{

    public function pay()
    {
        return 'Processing Paypal Payment...!';
    }
}
