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
// ---------------------------- front route ----------------
Route::get('/',function(){
    return redirect('/ar');
});
Route::get('/{lang}', 'HomeController@index');

Route::get('/{lang}/blog/{id}', 'HomeController@blog');

Route::get('/{lang}/menu/{id}', 'HomeController@menuBySection');


Route::get('/{lang}/menucontry/{id}', 'HomeController@menubycontry');


Route::get('/{lang}/menu/{menu}/{id}', 'HomeController@menuDetails');

Route::post('/order/store', 'orderController@store');

Route::get('/order/index', 'orderController@index');

Route::get('/order/done/{order}', 'orderController@orderDone');


Route::get('/{lang}/contact', 'homeController@contact');

Route::post('/contactsend', 'homeController@contactsend');


// ---------------------------- front route ----------------

Auth::routes();

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
