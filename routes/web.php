<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DisasterController;
use App\Http\Controllers\UserDisasterController;
use App\Http\Controllers\OfficeController;
use App\Http\Controllers\DisasterDamageController;
use App\Http\Controllers\UserDisasterDamageController;
use App\Http\Controllers\DisasterImageController;
use App\Http\Controllers\UserDisasterImageController;
use App\Http\Controllers\DisasterLocationController;
use App\Http\Controllers\UserDisasterLocationController;
use App\Http\Controllers\DisasterStatusController;
use App\Http\Controllers\DisasterTypeController;
use App\Http\Controllers\DispatcherController;
use App\Http\Controllers\ETLcontroller;
use App\Http\Controllers\etlquerycontroller;

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

Route::get('dashboard',[ETLcontroller::class, 'list']);
Route::get('/',[etlquerycontroller::class, 'etlsum']);

Route::get('charts', function () {
    return view('charts');
});

Route::prefix('admin')->middleware('auth','isAdmin')->group(function(){
    Route::resource('disaster', DisasterController::class);
    Route::resource('office', OfficeController::class);
    Route::resource('disasterdamage', DisasterDamageController::class);
    Route::resource('disasterimage', DisasterImageController::class);
    Route::resource('disasterlocation', DisasterLocationController::class);
    Route::resource('disasterstatus', DisasterStatusController::class);
    Route::resource('disastertype', DisasterTypeController::class);
    Route::resource('dispatcher', DispatcherController::class);
});

 Route::prefix('user')->middleware('auth','isUser')->group(function(){
     Route::resource('disaster', UserDisasterController::class, ['names' => ['index' => 'userdisaster.index',
     'create' => 'userdisaster.create',
     'store' => 'userdisaster.store',
     'show' => 'userdisaster.show',
     'edit' => 'userdisaster.edit',
     'update' => 'userdisaster.update',
     'destroy' => 'userdisaster.destroy'
     ]]);
     Route::resource('disasterdamage', UserDisasterDamageController::class, ['names' => ['index' => 'userdisasterdamage.index',
     'create' => 'userdisasterdamage.create',
     'store' => 'userdisasterdamage.store',
     'show' => 'userdisasterdamage.show',
     'edit' => 'userdisasterdamage.edit',
     'update' => 'userdisasterdamage.update',
     'destroy' => 'userdisasterdamage.destroy'
     ]]);
     Route::resource('disasterimage', UserDisasterImageController::class, ['names' => ['index' => 'userdisasterimage.index',
     'create' => 'userdisasterimage.create',
     'store' => 'userdisasterimage.store',
     'show' => 'userdisasterimage.show',
     'edit' => 'userdisasterimage.edit',
     'update' => 'userdisasterimage.update',
     'destroy' => 'userdisasterimage.destroy'
     ]]);
     Route::resource('disasterlocation', UserDisasterLocationController::class, ['names' => ['index' => 'userdisasterlocation.index',
     'create' => 'userdisasterlocation.create',
     'store' => 'userdisasterlocation.store',
     'show' => 'userdisasterlocation.show',
     'edit' => 'userdisasterlocation.edit',
     'update' => 'userdisasterlocation.update',
     'destroy' => 'userdisasterlocation.destroy'
     ]]);
 });


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
