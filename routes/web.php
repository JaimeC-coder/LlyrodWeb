<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;


Route::get('/',[PageController::class,'index']);
Route::get('/nuestroTrabajo',[PageController::class,'industria']);
Route::get('/contactanos',[PageController::class,'contact']);
Route::post('/contactanos', [PageController::class,'enviarGmail'])->name('contactPost');
