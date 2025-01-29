<?php

namespace App\Examples\RealTimeFacades;


class Greeting
{
    /**
     * @param $name
     *
     * @return string
     */
    public function sayHello($name): string
    {
        return "Hello, $name";
    }
}
