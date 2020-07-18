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

//リスト一覧画面
Route::get('/','ListingsController@index');

//リスト新規画面
Route::get('/new', 'ListingsController@new')->name('new');

//リスト新規処理
Route::post('/listings','ListingsController@store');

//リスト更新画面
Route::get('/listingsedit/{listing_id}', 'ListingsController@edit');

//リスト更新処理
Route::post('/listing/edit','ListingsController@update');

//リスト削除処理
Route::get('/listingsdelete/{listing_id}', 'ListingsController@destroy');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//カード新規作成
Route::get('listing/{listing_id}/card/new', 'CardsController@new')->name('new_card');
//カード新規追加
Route::post('/listing/{listing_id}/card', 'CardsController@store');

//カード詳細画面
Route::get('listing/{listing_id}/card', 'CardsController@show');

//カード編集画面
Route::get('listing/{listing_id}/card/{card_id}/edit', 'CardsController@edit');

//カード更新処理
Route::post('/card/edit', 'CardsController@update');

//カード削除処理
Route::get('listing/{listing_id}/card/{card_id}/delete', 'CardsController@destroy');
