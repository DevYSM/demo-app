<?php

namespace App\Examples\OCP\Correct;

use App\Examples\OCP\Correct\Interfaces\PayableInterface;


class WireTransferPayment implements PayableInterface
{

    public function pay()
    {
        return 'Processing Wire Transfer Payment...!';
    }
}
