<?php

use App\Http\Controllers\CocktailController;
use App\Http\Controllers\IngredientController;
use Illuminate\Support\Facades\Route;

    Route::get('/', function () {
        return redirect()->route("cocktails.index");
    });

    Route::middleware(['auth'])->group(function () {
        Route::resource('ingredients', IngredientController::class);
        Route::resource('cocktails', CocktailController::class);
    });

    require __DIR__.'/auth.php';