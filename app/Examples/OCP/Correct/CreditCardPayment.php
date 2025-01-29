<?php

namespace App\Examples\OCP\Correct;

use App\Examples\OCP\Correct\Interfaces\PayableInterface;


class CreditCardPayment implements PayableInterface
{
    public function pay()
    {
        return 'Processing Credit Card Payment...!';
    }
}
