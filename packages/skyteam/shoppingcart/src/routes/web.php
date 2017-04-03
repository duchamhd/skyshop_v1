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

Route::get('mua-hang/{id}',[
                'as'=>'muahang'
                ,'uses'=>'Skyteam\Shoppingcart\ShoppingcartController@muahang' 
    ]);
// Route::get('mua-hang-{$id}'/{tensanpham},['as'=>'muahang', 'uses'=>'ShoppingcartController@muahang' ]);
Route::get('gio-hang', [
		'as'=>'giohang'
		,'uses'=>'Skyteam\Shoppingcart\ShoppingcartController@giohang'		
]);

Route::get('xoa-san-pham/{id}', [
		'as'=>'xoasanpham'
		,'uses'=>'Skyteam\Shoppingcart\ShoppingcartController@xoasanpham'		
]);