<?php

use App\Http\Controllers\SampleController;
use Illuminate\Support\Facades\Route;
use Livewire\Controllers\HttpConnectionHandler as LivewireHandler;

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

Route::group(['prefix' => 'p,{profile}'], function () {
    Route::group(['prefix' => 's,{shop}'], function () {

        Route::get('sample-works', [SampleController::class, 'index']); //THIS DOES WORK
        Route::post('sample-works', [SampleController::class, 'index']);

        Route::any('sample-works-too', [SampleController::class, 'index']); //THIS DOES WORK TOO

        Route::get('sample', [SampleController::class, 'index']); //THIS DOESN'T WORK

        Route::any('livewire/message/{name}', LivewireHandler::class); // MY CUSTOM LIVEWIRE HANDLER

    });
});
