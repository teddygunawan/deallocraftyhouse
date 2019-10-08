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
Route::get('/', 'MainController@index');
Route::get('images/{image}', function($image = null)
{
    $path = storage_path().'/app/'.$image;
    if (file_exists($path)) { 
        return Response::download($path);
    }
});

Route::prefix('user/{user_id}')->name('user')->group(function (){
    Route::get('/', 'UserController@profile');
});
Route::get('/products/{productID}', 'ProductController@getProductID');
Route::get('/products', 'CategoryController@index');
Route::post('/products/{productID}', 'ProductController@addReview');
//Route::get('/reviews', 'MainController@index');
//Route::get('/category/{category_id}', 'CategoryController@showCategory');
//Route::get('/category/{category_id}/{sub_category_id}', 'CategoryController@showSubCategory');
//Route::get('/result', 'ProductController@searchProduct');
//Route::get('/cart/{user_id}/{order_id}', 'TransactionController@showShoppingCart');
//Route::get('/cart/{user_id}/{order_id}/delete', 'TransactionController@removeOrderDetail');
//Route::post('/cart/{user_id}/{order_id}/{product_id}', 'TransactionController@addItemToCart');
//Route::get('/cart/{user_id}/{order_id}/{product_id}', 'TransactionController@addItemToCart2');
//Route::get('/cart/{user_id}/{order_id}/edit', 'TransactionController@changeAmount');
//Route::get('/checkout/{order_id}/deliveryinformation', 'TransactionController@checkoutInformation');
//Route::get('/checkout/{order_id}/payment', 'TransactionController@paymentInformation');
//Route::post('/user/{user_id}/fromDelivery', 'UserController@saveFromCheckout');
//Route::get('/checkout/{order_id}/confirmpayment', 'TransactionController@confirmPayment');
/*Route::get('register'.function(){
    return View::make('register');
});*/
//Get the image path

//Route::get('/user/{user_id}', 'UserController@profile');
//Route::post('/user/{user_id}', 'UserController@save');
//Route::post('/user/{user_id}/password', 'UserController@update_password');
//Route::get('/user/{user_id}/orders', 'UserController@purchase_history');
//Route::get('/user/{user_id}/orders/{order_id}', 'UserController@order_details');
//
//Route::get('/user/{user_id}/shop', 'ShopController@index');
//Route::get('/user/{user_id}/shop/new', 'ShopController@new');
//Route::get('/user/{user_id}/shop/orders', 'ShopController@order_management');
//Route::get('/user/{user_id}/shop/orders/{order_details_id}/proceed', 'ShopController@proceed');
//Route::post('/user/{user_id}/shop/add', 'ShopController@add');
//Route::get('/user/{user_id}/shop/destroy/{product_id}', 'ShopController@destroy');
//Route::get('/user/{user_id}/shop/edit/{product_id}', 'ShopController@edit');
//Route::post('/user/{user_id}/shop/update/{product_id}', 'ShopController@update');
//
//Auth::routes();
//Route::resource('users', 'UserController');
//Route::resource('roles', 'RoleController');
//Route::resource('permissions', 'PermissionController');




