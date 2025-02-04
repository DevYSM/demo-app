<?php

namespace App\Examples\ISP\Correct\Implementations;

use App\Examples\ISP\Correct\Interfaces\CodingInterface;

class DeveloperEmployee implements CodingInterface
{

    public function coding(): string
    {
        return 'My Responsibility';
    }
}
