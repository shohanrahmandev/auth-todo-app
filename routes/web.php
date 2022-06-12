<?php

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
    return view('welcome');
});

Route::get('/index', [TodoController::class, 'index']);

Route::get('create', [TodoController::class, 'create']);

Route::get('details/{todo}', [TodoController::class, 'details']);

Route::get('edit/{todo}', [TodoController::class, 'edit']);

Route::post('update/{todo}', [TodoController::class, 'update']);

Route::get('delete/{todo}', [TodoController::class, 'delete']);

Route::post('store-data', [TodoController::class, 'store']);




Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
