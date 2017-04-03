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
Route::get('tadmin', function () {
    return 'Hello World';
});

Route::get('admin/login', 'App\Http\Controllers\Auth\LoginController@dangnhap');
Route::post('admin/login', 'App\Http\Controllers\Auth\LoginController@postdangnhap');
Route::get('admin/logout', 'App\Http\Controllers\Auth\LoginController@dangxuat');
Route::get('social-login', function(){
    return view('layouts.socialLogin');
});
Route::get('auth/{provider}', 'App\Http\Controllers\Auth\SocialLoginController@redirectToProvider');
Route::get('auth/{provider}/callback', 'App\Http\Controllers\Auth\SocialLoginController@handleProviderCallback');

Route::group(['prefix' => 'admin', 'middleware' => 'AdminLogin'], function () {
    Route::group(['prefix' => 'category'], function () {
        Route::get('category_list', 'Skyteam\Admin\CateController@danhsach');
        Route::get('category_delete/{id}', 'Skyteam\Admin\CateController@xoa');
        Route::get('category_edit/{id}', 'Skyteam\Admin\CateController@sua');
        Route::post('category_edit/{id}', 'Skyteam\Admin\CateController@postsua');
        Route::get('category_add', 'Skyteam\Admin\CateController@them');
        Route::post('category_add', 'Skyteam\Admin\CateController@postthem');
    });

    Route::group(['prefix' => 'product'], function () {
        Route::get('product_list', 'Skyteam\Admin\Admin_Product_Controller@admin_product_list');

        Route::get('product_edit/{id}', 'Skyteam\Admin\Admin_Product_Controller@admin_product_edit');
        Route::post('product_edit/{id}', 'Skyteam\Admin\Admin_Product_Controller@admin_product_edit_post');
        Route::get('product_delete/{id}', 'Skyteam\Admin\Admin_Product_Controller@admin_product_delete');

        Route::get('product_add', 'Skyteam\Admin\Admin_Product_Controller@admin_product_add');

        Route::post('product_add', 'Skyteam\Admin\Admin_Product_Controller@admin_product_add_post');
    });

    Route::group(['prefix' => 'slide'], function () {
        Route::get('slide_list', 'Skyteam\Admin\SlideController@danhsach');

        Route::get('slide_edit/{id}', 'Skyteam\Admin\SlideController@sua');
        Route::post('slide_edit/{id}', 'Skyteam\Admin\SlideController@postsua');
        Route::get('slide_delete/{id}', 'Skyteam\Admin\SlideController@xoa');
        Route::get('slide_add', 'Skyteam\Admin\SlideController@them');
        Route::post('slide_add', 'Skyteam\Admin\SlideController@postthem');
    });

    Route::group(['prefix' => 'user'], function () {
        Route::get('user_list', 'Skyteam\Admin\UserController@danhsach');
        Route::get('user_delete/{id}', 'Skyteam\Admin\UserController@xoa');
        Route::get('user_edit/{id}', 'Skyteam\Admin\UserController@sua');
        Route::post('user_edit/{id}', 'Skyteam\Admin\UserController@postsua');

        Route::get('user_add', 'Skyteam\Admin\UserController@them');
        Route::post('user_add', 'Skyteam\Admin\UserController@postthem');
    });
    
    Route::group(['prefix' => 'contact'], function () {
        Route::get('contact_list', 'Skyteam\Admin\ContactController@danhsach');
        Route::get('contact_delete/{id}', 'Skyteam\Admin\ContactController@xoa');
        Route::get('contact_edit/{id}', 'Skyteam\Admin\ContactController@sua');
        Route::post('contact_edit/{id}', 'Skyteam\Admin\ContactController@postsua');

        
    });
});