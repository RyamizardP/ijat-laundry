<?php

use App\Http\Controllers\OutletController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('layouts.template');
});

// oulet
Route::get('/outlet', [OutletController::class, 'index'])->name('outlet');
Route::get('/outlet/create', [OutletController::class, 'create']);
Route::post('/outlet/store', [OutletController::class, 'store']);
Route::get('/outlet/show/{id}', [OutletController::class, 'show']);
Route::get('/outlet/edit/{id}', [OutletController::class, 'edit']);
Route::post('/outlet/update/{id}', [OutletController::class, 'update']);