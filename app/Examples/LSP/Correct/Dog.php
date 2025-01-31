<?php

namespace App\Examples\LSP\Correct;

class Dog extends Animal
{
    /**
     * @return string
     */
    public function makeSound(): string
    {
        return "Woof";
    }
}
