<?php

use App\Http\Controllers\Api\V1\ProdutoController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'v1'], function(){
    Route::apiResource('produtos', ProdutoController::class);
});