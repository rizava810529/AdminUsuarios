<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;



Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

/* Route::get('/usuarios',[UsuarioController::class,'index']); */



Route::controller(UsuarioController::class)->group(

    function () {
        Route::get('/usuarios', 'index');
        Route::get('/usuario/{id}','show');
        Route::post('/usuario/{id}', 'store');
        Route::put('/usuario/{id}', 'update');
        Route::delete('/usuario/{id}', 'destroy');
    }
);