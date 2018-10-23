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
    $product = App\Product::where('identifier', $identifier)->first();
    $product->each(function($product){
        $product->category;
        $product->images;
    });
    //return App\Product::where('identifier', $identifier)->first();
    return $product;
});
Route::bind('category', function($category){
    return App\Category::find($category);
});

Route::bind('user', function($user){
    return App\User::find($user);
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

    Route::get('dashboard', function(){
        return view('admin.dashboard');
    })->name('dashboard');

    Route::resource('category', 'CategoryController');
    Route::get('category/{category}', [
        'as' => 'category-destroy',
        'uses' => 'CategoryController@destroy'
    ]);

    Route::resource('product', 'ProductController');
    Route::get('product/{product}', [
        'as' => 'product-destroy',
        'uses' => 'ProductController@destroy'
    ]);

    Route::resource('user', 'UserController');
    Route::get('user/{user}', [
        'as' => 'user-destroy',
        'uses' => 'UserController@destroy'
    ]);

    Route::resource('orders', 'OrderController');

});

//Route::get('/home', 'HomeController@index')->name('home');
