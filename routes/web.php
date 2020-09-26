<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

// pizza routes
Route::get('/pizzas', 'PizzaController@index')->name('pizzas.index')->middleware('auth');
Route::get('/pizzas/create', 'PizzaController@create')->name('pizzas.create');
Route::post('/pizzas', 'PizzaController@store')->name('pizzas.store');
Route::get('/pizzas/{id}', 'PizzaController@show')->name('pizzas.show')->middleware('auth');
Route::delete('/pizzas/{id}', 'pizzaController@destroy')->name('pizzas.destroy')->middleware('auth');

// juice routes
Route::get('/juices', 'JuiceController@index')->name('juices.index')->middleware('auth');
Route::get('/juices/create', 'JuiceController@create')->name('juices.create');
Route::post('/juices', 'JuiceController@store')->name('juices.store');
Route::get('/juices/{id}', 'JuiceController@show')->name('juices.show')->middleware('auth');
Route::delete('/juices/{id}', 'JuiceController@destroy')->name('juices.destroy')->middleware('auth');

// chicken routes
Route::get('/chickens', 'ChickenController@index')->name('chickens.index')->middleware('auth');
Route::get('/chickens/create', 'ChickenController@create')->name('chickens.create');
Route::post('/chickens', 'ChickenController@store')->name('chickens.store');
Route::get('/chickens/{id}', 'ChickenController@show')->name('chickens.show')->middleware('auth');
Route::delete('/chickens/{id}', 'ChickenController@destroy')->name('chickens.destroy')->middleware('auth');


Auth::routes([
  'register' => false,
]);

Route::get('/home', 'HomeController@index')->name('home');
