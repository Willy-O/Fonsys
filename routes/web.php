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
    return view('auth.login');
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
    Route::get('{user}', 'UsersController@show')->name('users.show');
    Route::get('{user}/edit', 'UsersController@edit')->name('users.edit');
    Route::put('{user}', 'UsersController@update')->name('users.update');
    Route::delete('{user}', 'UsersController@destroy')->name('users.destroy');
});

Route::group(['prefix' => 'projectsData'], function(){
    Route::get('/', 'ProjectsDataController@index')->name('projectsData.index');
    Route::get('create', 'ProjectsDataController@create')->name('projectsData.create');
    Route::post('/', 'ProjectsDataController@store')->name('projectsData.store');
    Route::get('{projectData}', 'ProjectsDataController@show')->name('projectsData.show');
    Route::get('{projectData}/edit', 'ProjectsDataController@edit')->name('projectsData.edit');
    Route::put('{projectData}', 'ProjectsDataController@update')->name('projectsData.update');
    Route::delete('{projectData}', 'ProjectsDataController@destroy')->name('projectsData.destroy');
});

Route::group(['prefix' => 'projectsInfo'], function(){
    Route::get('/', 'ProjectsInfoController@index')->name('projectsInfo.index');
    Route::get('create', 'ProjectsInfoController@create')->name('projectsInfo.create');
    Route::post('/', 'ProjectsInfoController@store')->name('projectsInfo.store');
    Route::get('{projectInfo}', 'ProjectsInfoController@show')->name('projectsInfo.show');
    Route::get('{projectInfo}/edit', 'ProjectsInfoController@edit')->name('projectsInfo.edit');
    Route::put('{projectInfo}', 'ProjectsInfoController@update')->name('projectsInfo.update');
    Route::delete('{projectInfo}', 'ProjectsInfoController@destroy')->name('projectsInfo.destroy');
});

Route::group(['prefix' => 'trackings'], function(){
    Route::get('/', 'TrackingsController@index')->name('trackings.index');
    Route::get('create', 'TrackingsController@create')->name('trackings.create');
    Route::post('/', 'TrackingsController@store')->name('trackings.store');
    Route::get('{tracking}', 'TrackingsController@show')->name('trackings.show');
    Route::get('{tracking}/edit', 'TrackingsController@edit')->name('trackings.edit');
    Route::put('{tracking}', 'TrackingsController@update')->name('trackings.update');
    Route::delete('{tracking}', 'TrackingsController@destroy')->name('trackings.destroy');
});

Route::group(['prefix' => 'clousures'], function(){
    Route::get('/', 'ClousuresController@index')->name('clousures.index');
    Route::get('create', 'ClousuresController@create')->name('clousures.create');
    Route::post('/', 'ClousuresController@store')->name('clousures.store');
    Route::get('{clousure}', 'ClousuresController@show')->name('clousures.show');
    Route::get('{clousure}/edit', 'ClousuresController@edit')->name('clousures.edit');
    Route::put('{clousure}', 'ClousuresController@update')->name('clousures.update');
    Route::delete('{clousure}', 'ClousuresController@destroy')->name('clousures.destroy');
});
Auth::routes(['verify' => true]);

// Route::get('/home', 'HomeController@index')->name('home');
Route::get('/home', function(){
    return view('home');
})->name('home');

Route::get('/test/', function () {
    $pdf = PDF::loadView('pdf.proofToPDF');
    return $pdf->download('proofToPDF.pdf');
  })->name('pdf');