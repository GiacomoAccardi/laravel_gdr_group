<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\CharactersController;
use App\Http\Controllers\Api\ItemsController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/characters', [CharactersController::class, 'index'])->name('characters');
Route::get('/items', [ItemsController::class, 'index'])->name('items');
Route::get('/characters/confirm-choices/{slug}', [CharactersController::class, 'confirmChoice'])->name('confirm');
Route::get('/raccoon-the-game', [CharactersController::class, 'gameScreen'])->name('game');