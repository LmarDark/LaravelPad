<?php

use Illuminate\Support\Facades\Route;

Route::get('/{asd}', function ($asd) {
    return view('index');
});
/**
 * Verifica no banco se existe a rota, caso não exista retorna a textarea
 */