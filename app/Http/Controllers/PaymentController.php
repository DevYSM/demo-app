<?php

namespace App\Http\Controllers;

use App\Examples\OCP\PaymentFactory;

class PaymentController extends Controller
{
    /**
     * @throws \Exception
     */
    public function pay(string $type)
    {
        return (new PaymentFactory())
            ->initializePayment($type)
            ->pay();
    }
}
