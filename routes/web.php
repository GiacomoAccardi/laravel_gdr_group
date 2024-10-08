<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CharactersController as CharactersController;
use App\Http\Controllers\ItemsController as ItemsController;
use App\Http\Controllers\TypeController as TypeController;
use App\Http\Controllers\PageController as PageController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [PageController::class, 'homeRedirect'])->name('homepage');
Route::get('/about', [PageController::class, 'aboutRedirect'])->name('about');
Route::get('/contacts', [PageController::class, 'contactsRedirect'])->name('contacts');

Route::resource('characters', CharactersController::class);
Route::resource('types', TypeController::class);

Route::resource('items', ItemsController::class);

