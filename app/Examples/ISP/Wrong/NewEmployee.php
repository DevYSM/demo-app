<?php

namespace App\Examples\ISP\Wrong;

class NewEmployee implements EmployeeInterface
{

    public function coding(): string
    {
        return 'My Responsibility';
    }

    public function designUI(): string
    {
        return 'Not my responsibility..!';
    }

    public function manageProject(): string
    {
        return 'Not my responsibility..!';
    }
}
