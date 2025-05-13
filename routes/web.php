<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PadNameController;

Route::get('/', function () {
    return view('home');
});

Route::get('/{name}', [PadNameController::class, 'verifyIfExistsPadName']);
Route::post('/save-text', [PadNameController::class, 'saveContentInDB']);

/*Route::get('/{name}', function ($name) {
    return view('index');
});*/
/**
 * Verifica no banco se existe a rota, caso não exista retorna a textarea
 */