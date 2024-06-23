<?php

use App\Http\Controllers\InventoryController;
use Illuminate\Support\Facades\Route;




Route::get('', function () {
    return view('welcome');
});
Route::resource('inventoryDetails', InventoryController::class);


Route::get('/profit', function () {
    return view('welcome');
})->name('profit');

Route::get('/available', function () {
    return view('avalable');
})->name('available');

Route::get('/mobile', function () {
    return view('mobile');
});

Route::get('/mobile', [InventoryController::class, 'mobile'])->name('mobile');
Route::delete('/inventories/{inventory}', 'App\Http\Controllers\InventoryController@destroy')->name('inventories.destroy');

Route::get('/inventories/{inventory}/edit', 'App\Http\Controllers\InventoryController@edit')->name('inventories.edit');
Route::put('/inventories/{inventory}', 'App\Http\Controllers\InventoryController@update')->name('inventories.update');
