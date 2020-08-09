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

Route::get('/', function (  )  {
    return view('index');
});

// Route::group(['prefix' => 'users'], function(){
//     Route::resource('/', 'UsersController');
// });

// Route::group(['prefix' => 'contracts'], function(){
//     Route::resource('/', 'ContractsController');
// });

// Route::group(['prefix' => 'clousures'], function(){
//     Route::resource('/', 'ClousuresController');
// });

// Route::group(['prefix' => 'trackings'], function(){
//     Route::resource('/', 'TrackingsController');
// });

Route::group(['prefix' => 'beneficiaries'], function(){
    Route::get('/', 'BeneficiariesController@index')->name('beneficiaries.index');
    Route::get('create', 'BeneficiariesController@create')->name('beneficiaries.create');
    Route::post('/', 'BeneficiariesController@store')->name('beneficiaries.store');
    Route::get('{beneficiary}', 'BeneficiariesController@show')->name('beneficiaries.show');
    Route::get('{beneficiary}/edit', 'BeneficiariesController@edit')->name('beneficiaries.edit');
    Route::put('{beneficiary}', 'BeneficiariesController@update')->name('beneficiaries.update');
    Route::delete('{beneficiary}', 'BeneficiariesController@destroy')->name('beneficiaries.destroy');
});

Route::group(['prefix' => 'users'], function(){
    Route::get('/', 'UsersController@index')->name('users.index');
    Route::get('create', 'UsersController@create')->name('users.create');
    Route::post('/', 'UsersController@store')->name('users.store');
    Route::get('{beneficiary}', 'UsersController@show')->name('users.show');
    Route::get('{beneficiary}/edit', 'UsersController@edit')->name('users.edit');
    Route::put('{beneficiary}', 'UsersController@update')->name('users.update');
    Route::delete('{beneficiary}', 'UsersController@destroy')->name('users.destroy');
});