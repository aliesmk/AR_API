<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::prefix('v1')->group(function () {
    Route::post('media/upload', [\App\Http\Controllers\MediaController::class, 'store'])->name('media.store');
    Route::get('/test', function (){
        return 'hello Word';
    });
});
