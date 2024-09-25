<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MonController;


Route::get('/', function () {
    return view('welcome');
});


