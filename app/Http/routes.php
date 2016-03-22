<?php
use Illuminate\Support\Facades\Mail;
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
 */

Route::get('/', function () {
    return view('login');
});

Route::post('/register', 'UserController@userRegister');
Route::get('/login', ['as' => 'login', 'uses' => 'PagesController@getLogin']);
Route::post('/login', ['as' => 'login', 'uses' => 'UserController@loginUser']);

Route::get('/register', ['as' => 'register', 'uses' => 'PagesController@getRegister']);
Route::post('/register', ['as' => 'register', 'uses' => 'UserController@addUser']);
Route::get('/index', ['as' => 'index', 'uses' => 'PagesController@getIndex']);

Route::get('/settings', ['as' => 'settings', 'uses' => 'PagesController@getSettings']);

Route::get('/products', ['as' => 'products', 'uses' => 'PagesController@getproducts']);
Route::post('/products', ['as' => 'products', 'uses' => 'ProductController@addProduct']);

Route::get('/sales', ['as' => 'sales', 'uses' => 'PagesController@getsales']);
Route::get('/pos', ['as' => 'pos', 'uses' => 'PagesController@getpos']);

Route::get('/reciept', ['as' => 'reciept', 'uses' => 'PagesController@getreciept']);
Route::get('/stockcontrol', ['as' => 'stockcontrol', 'uses' => 'PagesController@getstockcontrol']);
Route::get('/inventorycount', ['as' => 'inventorycount', 'uses' => 'PagesController@getinventorycount']);

Route::post('/suppliers', ['as' => 'suppliers', 'uses' => 'SupplierController@addSupplier']);
Route::get('/suppliers', ['as' => 'suppliers', 'uses' => 'PagesController@getsuppliers']);

Route::get('/brands', ['as' => 'brands', 'uses' => 'PagesController@getbrands']);
Route::post('/brands', ['as' => 'brands', 'uses' => 'BrandController@addBrand']);

Route::get('/types', ['as' => 'types', 'uses' => 'PagesController@gettypes']);
Route::post('/types', ['as' => 'types', 'uses' => 'TypeController@addType']);

Route::get('/setUpTax', ['as' => 'tax', 'uses' => 'PagesController@gettax']);
Route::get('/taxcountry', ['as' => 'taxcountry', 'uses' => 'PagesController@gettaxcountry']);
Route::get('/newStockOrder', ['as' => 'newStockOrder', 'uses' => 'PagesController@getnewStockOrder']);
Route::post('/newStockOrder', ['as' => 'newStockOrder', 'uses' => 'NewStockOrderController@addnewStockOrder']);

// Route::get('/email', function () {

//     Mail::send('emails.test', ['name' => 'mamata'], function ($message) {

//         $message->to('jeewandhakal25@gmail.com')->from('mamatatamang11@gmail.com')->subject('Test Mail');
//     });
//     return "your email has been sent successfully";
// });

Route::get('/mail', function () {

    Mail::send('emails.test', ['name' => 'Chuzy'], function ($message) {
        $message->to('chuzynoies@gmail.com')->from('mamatatamang11@gmail.com')->subject('Welcome to Retail management system');
    });
    return "your email has been sent successfully";
});
