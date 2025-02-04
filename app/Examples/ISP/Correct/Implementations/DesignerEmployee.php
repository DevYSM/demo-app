<?php

namespace App\Examples\ISP\Correct\Implementations;

use App\Examples\ISP\Correct\Interfaces\DesignerInterface;

class DesignerEmployee implements DesignerInterface
{
    
    public function designUI(): string
    {
        return 'My Responsibility';
    }

}
