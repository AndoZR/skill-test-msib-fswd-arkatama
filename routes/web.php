<?php

use App\Http\Controllers\c_entryData;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('layouts.app');
});


Route::controller(c_entryData::class)->prefix('entryData')->group(function () {
    Route::get('','viewUserData')->name('viewData');
    Route::get('tambahUser','addUser')->name('addUser.tambah');
    Route::post('tambahUserSave', 'saveUser')->name('addUser.tambah.save');
});