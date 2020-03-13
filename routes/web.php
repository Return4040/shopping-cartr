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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/ttt', function () {
    return view('main');
});

Route::get('/loading', function () {
    return view('loading');
});

Route::get('/jie', function () {
    return view('jie');
});

Route::get('/detail 7 checkout', function () {
    return view('detail 7 checkout');
});

Route::get('/detail 8 checkout', function () {
    return view('detail 8 checkout');
});

Route::get('/detail 9 checkout', function () {
    return view('detail 9 checkout');
});

Route::get('/audiA4 checkout', function () {
    return view('audiA4 checkout');
});


Route::get('/audiA6 checkout', function () {
    return view('audiA6 checkout');
});

Route::get('/audiTT checkout', function () {
    return view('audiTT checkout');
});

Route::get('/BMW 3 series checkout', function () {
    return view('BMW 3 series checkout');
});

Route::get('/BMW 5 series checkout', function () {
    return view('BMW 5 series checkout');
});

Route::get('/BMW i8 checkout', function () {
    return view('BMW i8 checkout');
});

Route::get('/detail 7', function () {
    return view('detail 7');
});

Route::get('/BMW 3 series', function () {
    return view('BMW 3 series');
});

Route::get('/BMW 5 series', function () {
    return view('BMW 5 series');
});

Route::get('/audiA4', function () {
    return view('audiA4');
});
Route::get('/detail 7 checkout', function () {
    return view('detail 7 checkout');
});

Route::get('/payment', function () {
    return view('payment');
});

Route::get('/successful', function () {
    return view('successful');
});

Route::get('/BMW 3 series checkout', function () {
    return view('BMW 3 series checkout');
});

Route::get('/payment', function () {
    return view('payment');
});

Route::get('/BMW 5 series checkout', function () {
    return view('BMW 5 series checkout');
});

Route::get('/audiA4 checkout', function () {
    return view('audiA4 checkout');
});
Route::get('/contactUs', function () {
    return view('contactUs');
});

Route::get('/BMW i8 checkout', function () {
    return view('BMW i8 checkout');
});

Route::get('/BMW 5 series checkout', function () {
    return view('BMW 5 series checkout');
});

Route::get('/detail 8', function () {
    return view('detail 8');
});

Route::get('/detail 8 checkout', function () {
    return view('detail 8 checkout');
});

Route::get('/detail 9', function () {
    return view('detail 9');
});

Route::get('/detail 9 checkout', function () {
    return view('detail 9 checkout');
});

Route::get('/audiA6', function () {
    return view('audiA6');
});

Route::get('/audiA6 checkout', function () {
    return view('audiA6 checkout');
});

Route::get('/audiTT', function () {
    return view('audiTT');
});

Route::get('/AudiTT checkout', function () {
    return view('AudiTT checkout');
});

Route::get('/BMW i8', function () {
    return view('BMW i8');
});


Route::get('/addProduct',[
    'uses'=>'ProductController@create',
    'as'=>'product'
]);

Route::post('/addProduct/store',[
    'uses'=>'ProductController@store',
    'as'=>'addProduct.store'
]);

Route::get('/viewproduct',[
    'uses'=>'ProductController@view',
    'as'=>'view.product'
]);




Route::get('/viewproduct/delete/{id}', [
    'uses'=>'ProductController@delete',
    'as' => 'viewproduct.delete'
]);

Route::get('/viewlist',[
    'uses'=>'ProductController@viewlist',
    'as'=>'view.list'
]);

Route::get('/productdetail/{id}', [
    'uses'=>'ProductController@detail',
    'as' => 'product.detail'
]);

Route::post('/viewlist', [
    'uses'=>'ProductController@search',
    'as' => 'search.product'
]);

Route::get('editproduct/{id}', [
    'uses'=>'ProductController@edit',
    'as' => 'edit.product'
]);

Route::post('updateproduct', [
    'uses'=>'ProductController@update',
    'as' => 'update.product'
]);

// route for processing payment
Route::post('paypal', 'PaymentController@payWithpaypal');

// route for check status of the payment
Route::get('status', 'PaymentController@getPaymentStatus');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');