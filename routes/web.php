<?php

use App\Foo;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $foo = new Foo;

    return json_encode($foo);
});
