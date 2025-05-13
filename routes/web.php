<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PadNameController;

Route::get('/', function () {
    return view('home');
});

Route::get('/{name}', [PadNameController::class, 'verifyIfExistsPadName']);
Route::post('/save-text', [PadNameController::class, 'saveContentInDB']);