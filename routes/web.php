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

Route::get('/', ['uses' => 'main\MainController@index', 'as' => 'main']);
Route::get('/detail', function() {
  return view('main.detail');
});


Route::get('/template', function() {
  return view('main.template2');
});

/* Маршруты аутентификации */
Route::get('authenticated', 'main\MainController@authenticated');
Route::get('/admin', ['uses' => 'Admin\AdminController@index', 'as' => 'admin'])->middleware('admin');
Route::post('register', 'Auth\RegisterController@register');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');
Route::get('exit', function() {
  Auth::logout();
});

Route::get('/initializer/fields/{name}', 'Initializer\InitializerController@fields');

// Загрузка данных для меню
Route::get('/left-menu', 'Menu\MenuController@index');


Route::get('/catalog/{slug}', ['uses'=>'main\MainController@catalog', 'as'=>'catalog.type-product']);
Route::get('/catalog/{slugTypeProduct}/{slugLineProduct}', ['uses' => 'main\MainController@lineProduct', 'as'=>'catalog.line-product']);
Route::get('/catalog/{slug_type_product}/{slug_producer_type_product}/{slug}',['uses' => 'main\MainController@detail', 'as' => 'catalog.detail']);



