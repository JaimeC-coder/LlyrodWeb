<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;


Route::get('/',[PageController::class,'index']);
Route::get('/nuestro_trabajo',[PageController::class,'industria']);
Route::get('/contactanos',[PageController::class,'contact']);
