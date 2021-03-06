<?php

use Illuminate\Support\Facades\Route;
use App\Models\Lga;
use App\Models\User;
use App\Models\Team;
use App\Models\SenatorialZone;
use App\Models\FederalConstituency;
use App\Models\StateConstituency;
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
Route::get('/teams' , function(){
    return view('social');
});
Route::get('/', function () {
    return view('brand',['stateConstituencies'=>StateConstituency::all(),'federalConstituencies'=>FederalConstituency::all(),'senatorialZones'=>SenatorialZone::all()]);
})->name('welcome');

Route::prefix('ajax')
   ->group(function() {
    Route::get('/lga/{lgaId}/get-wards', 'AjaxController@getLgaWards');
    Route::get('/ward/{wardId}/get-polling-units', 'AjaxController@getWardPollingUnits');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


Route::prefix('senatorial-zone')
   ->middleware(['auth:sanctum', 'verified'])
   ->name('senatorial-zone.')
   ->namespace('SenatorialZone')
   ->group(function() {
    Route::get('/', 'SenatorialZoneController@index')->name('index');

    Route::prefix('{senatorialZoneId}/agent')
   ->name('agent.')
   ->group(function() {
      Route::get('/', 'SenatorialZoneAgentController@create')->name('create');

   });

    Route::prefix('lga')
   ->name('lga.')
   ->group(function() {
      Route::get('/{lgaId}', 'LgaController@index')->name('index');
    //   lga/wards routes

        Route::prefix('ward')
        ->name('ward.')
        ->group(function() {
            Route::get('/{wardId}', 'WardController@index')->name('index');
            //   lga/ward polling unit routes

            Route::prefix('polling-unit')
            ->name('polling-unit.')
            ->group(function() {
                Route::get('/{pollingUnitId}', 'PollingUnitController@index')->name('index');
                // polling unit member controller

                Route::prefix('{pollingUnitId}/member')
                ->name('member.')
                ->group(function() {
                    Route::get('/', 'PollingUnitMemberController@index')->name('index');
                    Route::get('/create', 'PollingUnitMemberController@create')->name('create');
                    Route::get('/{memberId}/edit', 'PollingUnitMemberController@edit')->name('edit');
                    Route::post('/register', 'PollingUnitMemberController@register')->name('register');
                    Route::post('/{memberId}/update', 'PollingUnitMemberController@update')->name('update');
                    
                });
            });
        });
   });
});

Route::prefix('federal-constituency')
   ->middleware(['auth:sanctum', 'verified'])
   ->name('federal-constituency.')
   ->namespace('FederalConstituency')
   ->group(function() {
    Route::get('/', 'FederalConstituencyController@index')->name('index');
    // lga routs

    Route::prefix('lga')
   ->name('lga.')
   ->group(function() {
      Route::get('/{lgaId}', 'LgaController@index')->name('index');
    //   lga/wards routes

        Route::prefix('ward')
        ->name('ward.')
        ->group(function() {
            Route::get('/{wardId}', 'WardController@index')->name('index');
            //   lga/ward polling unit routes

            Route::prefix('polling-unit')
            ->name('polling-unit.')
            ->group(function() {
                Route::get('/{pollingUnitId}', 'PollingUnitController@index')->name('index');
                // polling unit member controller

                Route::prefix('{pollingUnitId}/member')
                ->name('member.')
                ->group(function() {
                    Route::get('/', 'PollingUnitMemberController@index')->name('index');
                    Route::get('/create', 'PollingUnitMemberController@create')->name('create');
                    Route::get('/{memberId}/edit', 'PollingUnitMemberController@edit')->name('edit');
                    Route::post('/register', 'PollingUnitMemberController@register')->name('register');
                    Route::post('/{memberId}/update', 'PollingUnitMemberController@update')->name('update');
                    
                });
            });
        });
   });
});

Route::prefix('state-constituency')
   ->middleware(['auth:sanctum', 'verified'])
   ->name('state-constituency.')
   ->namespace('StateConstituency')
   ->group(function() {
    Route::get('/', 'StateConstituencyController@index')->name('index');
    // lga routs

    Route::prefix('{constituencyId}/ward')
   ->name('ward.')
   ->group(function() {
      Route::get('/', 'WardController@index')->name('index');

      Route::prefix('polling-unit')
            ->name('polling-unit.')
            ->group(function() {
                Route::get('/', 'PollingUnitController@index')->name('index');
                // polling unit member controller

                Route::prefix('{pollingUnitId}/member')
                ->name('member.')
                ->group(function() {
                    Route::get('/', 'PollingUnitMemberController@index')->name('index');
                    Route::get('/create', 'PollingUnitMemberController@create')->name('create');
                    Route::get('/{memberId}/edit', 'PollingUnitMemberController@edit')->name('edit');
                    Route::post('/register', 'PollingUnitMemberController@register')->name('register');
                    Route::post('/{memberId}/update', 'PollingUnitMemberController@update')->name('update');
                    
                });
            });
    
   });
});

Route::prefix('system')
   ->middleware(['auth:sanctum', 'verified'])
   ->name('system.')
   ->namespace('System')
   ->group(function() {
    Route::get('/', 'GovernmentController@index')->name('index');
});