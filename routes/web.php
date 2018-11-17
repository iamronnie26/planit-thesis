<?php

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
Auth::routes();


Route::get('/',function(){
    return view('home.index');
})->middleware('guest');


Route::post('redirect','Auth\RegisterController@redirect')
->name('redirectRegister');

Route::get('/home', 'HomeController@index')->name('home');

//Jobs Routes
Route::resource('job','JobsController');

//Public Routes
Route::get('partner/register','PartnersController@showRegistrationForm')
->name('partner.showRegForm');

Route::post('registerPartner','PartnersController@registerPartner')
    ->name('partner.register');

//Client User Routes
Route::prefix('client')->group(function(){
    //GET Routes
    Route::get('index','ClientsController@index')
        ->name('client.homepage');
    
    Route::get('settings','ClientsController@showSettings')
        ->name('client.settings');
        
    Route::get('register','ClientsController@showRegistrationForm')
        ->name('client.showRegForm');
    
    Route::get('home','ClientsController@home')
        ->name('client.home');

    //POST Routes
    Route::post('registerClient','ClientsController@registerClient')
    ->name('client.register');
    
});
    
        
//Partner User Routes
Route::prefix('partner')->middleware('partner')->group(function(){
    //GET Routes

    Route::get('/home','PartnersController@home')
        ->name('partner.home');

    Route::get('/profile','PartnersController@showProfile')
        ->name('partner.profile');
    
    //POST Routes


    //PUT Routes
    
});