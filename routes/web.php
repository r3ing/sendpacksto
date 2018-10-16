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
/*
Route::get('/', function () {
    return view('welcome');
});
*/

//======== Dependency Injection ========//
Route::bind('product', function($identifier){
    //$product =
    return App\Product::where('identifier', $identifier)->first();
});
Route::bind('category', function($category){
    return App\Category::find($category);
});
//======== End Dependency Injection ========//


Route::get('/', [
    'as'	=> 'home',
    'uses'	=> 'StoreController@index'
]);

Route::get('product/{identifier}/{slug}',[
    'as' => 'product-detail',
    'uses' => 'StoreController@show'
]);


//===== Cart ============//
Route::get('cart/show', [
    'as' => 'cart-show',
    'uses' => 'CartController@show'
]);

Route::get('cart/add/{product}', [
    'as' => 'cart-add',
    'uses' => 'CartController@add'
]);

Route::get('cart/delete/{product}',[
    'as' => 'cart-delete',
    'uses' => 'CartController@delete'
]);

Route::get('cart/trash', [
    'as' => 'cart-trash',
    'uses' => 'CartController@trash'
]);

Route::get('cart/update/{product}/{quantity?}', [
    'as' => 'cart-update',
    'uses' => 'CartController@update'
]);

Route::get('order-detail', [
    'as' => 'order-detail',
    'uses' => 'CartController@orderDetail'
]);
//===== End Cart ============//


Route::prefix('admin')->group(function () {
    Auth::routes();

    Route::get('/logout', function(){
        Auth::logout();
        return redirect('/');
    });
});

Route::group(['namespace' => 'Admin', 'middleware' => 'auth', 'prefix' => 'admin'], function(){

    Route::resource('category', 'CategoryController');
    Route::get('category/{category}', [
        'as' => 'category-destroy',
        'uses' => 'CategoryController@destroy'
    ]);

});

//Route::get('/home', 'HomeController@index')->name('home');
