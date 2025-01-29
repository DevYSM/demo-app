<?php


use Facades\App\Examples\RealtimeFacades\Greeting;

Route::get('example-1', function () {
    $greeting = new \App\Examples\RealTimeFacades\Greeting();
    return $greeting->sayHello('CodeWithYassen, from Example 1');
});

Route::get('example-2', function () {
    return Greeting::sayHello('CodeWithYassen, from Example 2, its magic');
});
