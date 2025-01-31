<?php

namespace App\Examples\LSP\Wrong;


class Animal
{
    /**
     * @return string
     */
    public function makeSound(): string
    {
        return "Bark!";
    }
}
