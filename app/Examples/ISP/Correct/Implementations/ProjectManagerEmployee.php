<?php

namespace App\Examples\ISP\Correct\Implementations;

use App\Examples\ISP\Correct\Interfaces\ManageProjectsInterface;

class ProjectManagerEmployee implements ManageProjectsInterface
{

    public function manageProject(): string
    {
        return 'My Responsibility';
    }
}
