<?php

namespace App\Examples\LSP\Correct;

class Cat extends Animal
{

    /**
     * @return string
     */
    public function makeSound(): string
    {
        return "Meow";
    }
}
