<?php

namespace App\Examples\OCP;

use App\Examples\OCP\Correct\CreditCardPayment;
use App\Examples\OCP\Correct\PaypalPayment;
use App\Examples\OCP\Correct\WireTransferPayment;


class PaymentFactory
{
    /**
     * @throws \Exception
     */
    public function initializePayment($type): PaypalPayment|WireTransferPayment|CreditCardPayment
    {
        return match ($type) {
            'credit_card' => new CreditCardPayment(),
            'paypal' => new PaypalPayment(),
            'wire_transfer' => new WireTransferPayment(),
            default => throw new \Exception('Invalid payment method'),
        };
    }
}
