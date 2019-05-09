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

Route::get('/', 'WelcomeController@index')->name('home');

Auth::routes();

Route::post('/wishlist','WishlistController@store')->name('wishlist.store');

Route::get('/wishlist','WishlistController@index')->name('wishlist.index');

Route::post('/saveForLater/{id}','WishlistController@wishlist_to_cart')->name('as');

Route::get('/wishlist/remove','WishlistController@destroy')->name('wishlist.remove');

Route::post('/compare','WishlistController@compare_store')->name('compare.store');

Route::post('/coupon','CouponsController@store')->name('coupon.store');

Route::delete('/coupon','CouponsController@destroy')->name('coupon.destroy');

Route::get('/home','Admin\DashboardController@index');

Route::post('/order','ProductController@order')->name('order');


Route::get('/products/{slug}','ProductController@show')->name('product.show');

Route::get('search','ProductController@search')->name('search');

Route::post('/sub','SubController')->name('sub');


Route::get('categories/{slug}','ProductController@category_show')->name('categories.show');


Route::get('/remove','ProductController@index')->name('remove');

Route::get('/cart','ProductController@cart')->name('cart.index');

Route::get('/update-shopping','ProductController@update')->name('cart.update');

Route::post('/productes','ProductController@store')->name('product.store');

Route::group(['prefix'=>'admin','as'=>'admin.','namespace' => 'admin', 'middleware' => ['auth','admin']],function(){
	Route::get('dashboard','DashboardController@index')->name('dashboard');
	Route::resource('subcategory','SubcategoryController');
	Route::resource('category','CategoryController');
	Route::resource('product','ProductController');
});


Route::group(['as'=>'author.','prefix'=>'author.','namespace'=>'Author','middleware'=>['auth','author']], function(){
    Route::get('dashboard','DashboardController@index')->name('dashboard');

});

View::composer('layouts.frontend.partials.header', function($view){
    $categories = App\Category::latest()->get();
    $view->with('categories',$categories);
    $subcategories = App\Subcategory::latest()->get();
    $view->with('subcategories', $categories);
});