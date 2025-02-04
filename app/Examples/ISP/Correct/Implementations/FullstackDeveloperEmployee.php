<?php

namespace App\Examples\ISP\Correct\Implementations;

use App\Examples\ISP\Correct\Interfaces\CodingInterface;
use App\Examples\ISP\Correct\Interfaces\DesignerInterface;

class FullstackDeveloperEmployee implements CodingInterface, DesignerInterface
{

    public function coding(): string
    {
        return 'My Responsibility';
    }

    public function designUI(): string
    {
        return 'My Responsibility';
    }
}
