<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HaiController;


Route::get('/postech/{nik}/cek',[HaiController::class,'index']);

Route::get('/dasboard', function () {
    return view('welcome');
});
