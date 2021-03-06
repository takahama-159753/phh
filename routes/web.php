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


//【応用】11章で /admin/profile/create にアクセスしたら ProfileController の add Action に割り当てるように設定しました。 
//ログインしていない状態で /admin/profile/create にアクセスした場合にログイン画面にリダイレクトされるように設定しましょう。


Route::group(['prefix' => 'admin'], function() {
    Route::get('/admin/profile/create', 'Admin\NewsController@add')->middleware('auth');
});


//【応用】同様に 11章で /admin/profile/edit にアクセスしたら ProfileController の edit Action に割り当てるように設定しました。 
//ログインしていない状態で /admin/profile/edit にアクセスした場合にログイン画面にリダイレクトされるように設定しましょう。

Route::group(['prefix' => 'admin'], function() {
    Route::get('admin/profile/edit', 'Admin\ProfileController@edit');
});





//URLとControllerやActionを紐付ける機能を何といいますか？
//Routing機能

//あなたが考える、group化をすることのメリットを考えてみてください。
//管理しやすくなる。


//「http://XXXXXX.jp/XXX というアクセスが来たときに、 AAAControllerのbbbというAction に渡すRoutingの設定」を書いてみてください。

Route::get('admin/news/create', 'Admin\AAAController@bbb');

//【応用】 前章でAdmin/ProfileControllerを作成し、add Action, edit Actionを追加しました。web.phpを編集して、admin/profile/create にアクセスしたら ProfileController の
//add Action に、admin/profile/edit にアクセスしたら ProfileController の edit Action に割り当てるように設定してください。

Route::get('admin/profile/create','Admin\ProfileController@add');
Route::get('admin/profile/edit', 'Admin\ProfileController@edit');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');






//routes/web.php ファイルを次のように編集します


Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function() {
     Route::get('news/create', 'Admin\NewsController@add');
     Route::post('news/create', 'Admin\NewsController@create'); # 追記
});



//【応用】 routes/web.php を編集して、 admin/profile/create に postメソッドでアクセスしたら ProfileController の create Action に割り当てるように設定してください

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function() {
     Route::get('news/create', 'Admin\ProfileController@add');
     Route::post('admin/profile/create', 'Admin\ ProfileController@create'); # 追記
});

//【応用】 routes/web.php を編集して、 admin/profile/edit に postメソッドでアクセスしたら ProfileController の update Action に割り当てるように設定してください。
Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function() {
     Route::post('admin/profile/edit', 'Admin\ ProfileController@update');
    
});