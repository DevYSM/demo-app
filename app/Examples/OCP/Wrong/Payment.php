<?php

namespace App\Examples\OCP\Wrong;

class Payment
{
    public function payWithCreditCard(): string
    {
        // logic to pay with credit card;
        return 'Paid with credit card';
    }

    public function payWithPaypal(): string
    {
        // logic to pay with paypal;
        return 'Paid with paypal';
    }

    public function payWithWireTransfer(): string
    {
        // logic to pay with wire transfer;
        return 'Paid with wire transfer';
    }
}
