<?php

use Illuminate\Support\Facades\Route;
use App\Models\Lga;
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
})->name('welcome');

Route::prefix('ajax')
   ->group(function() {
    Route::get('/lga/{lgaId}/get-wards', 'AjaxController@getLgaWards');
    Route::get('/ward/{wardId}/get-polling-units', 'AjaxController@getWardPollingUnits');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
