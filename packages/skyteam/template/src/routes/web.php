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
/*----------------- Route cho trang chủ ----------------*/
    Route::get('/','Skyteam\Template\HomeController@index');
    Route::get('hihi','Skyteam\Template\HomeController@sanphamtheoloai');
   // Route::get('/','HomeController@get_cate');

/* ---------------------------------------------------*/



// Chi tiết sản phẩm
Route::get('san-pham-{id}','Skyteam\Template\MyController@detail');
// Danh sách sản phẩm thuộc chuyên mục
Route::get('chuyen-muc-{id}','Skyteam\Template\MyController@product_list');
// So sanh san pha,
Route::get('so-sanh{id}', 'Skyteam\Template\MyController@product_compare');
Route::get('so-sanh', 'Skyteam\Template\MyController@product_compare1');
/*------ ------------ ----------- --------- ------------
Các Module xử lý
------ ------------ ----------- --------- ------------*/
// Trả vế kết quả tìm kiếm
Route::get('search','Skyteam\Template\MyController@search');
// 
//Liên hệ

Route::get('lien-he', ['as' => 'getLienHe', 'uses' => 'Skyteam\Template\ContactController@get_lienhe']);
Route::post('lien-he', ['as' => 'postLienHe', 'uses' => 'Skyteam\Template\ContactController@post_lienhe']);