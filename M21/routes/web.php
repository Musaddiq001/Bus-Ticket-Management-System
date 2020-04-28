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

Route::get('/mywebsite', 'WebsiteController@index');

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function(){
	return view('home.index');
});

Route::get('/login', 'LoginController@index');
Route::post('/login', 'LoginController@verify');

Route::get('/home', 'HomeController@index')->name('home.index');
Route::get('/manager', 'ManagerController@index')->name('manager.managerindex');
	
	
Route::get('/signup', 'SignupController@index')->name('signup.index');
Route::post('/signup', 'SignupController@insert');
Route::get('/logout', 'logoutController@index');


Route::group(['middleware'=>['sess']], function(){
	Route::get('/home', 'HomeController@index')->name('home.index');
	Route::get('/home/view_users', 'HomeController@list')->name('home.list');
	Route::get('/home/view_staffs', 'HomeController@list1')->name('home.list1');
	Route::get('/home/view_buscounters', 'HomeController@list2')->name('home.list2');
	Route::get('/home/view_buses', 'HomeController@list3')->name('home.list3');
	Route::get('/manager/view_buses', 'ManagerController@list4')->name('manager.list4');
	
	Route::get('/home/details/{id}', 'HomeController@show')->name('home.show')->middleware('sess');
	
		Route::get('/home/add', 'HomeController@add')->name('home.add');
		Route::post('/home/add', 'HomeController@insert');
		Route::get('/home/edit/{id}', ['as'=>'home.edit','uses'=>'HomeController@edit']);
		Route::post('/home/edit/{id}', 'HomeController@update');
		Route::get('/home/edit1/{id}', ['as'=>'home.edit1','uses'=>'HomeController@edit1']);
		Route::post('/home/edit1/{id}', 'HomeController@update1');
		Route::get('/home/delete/{id}', 'HomeController@delete')->name('home.delete');
		Route::post('/home/delete/{id}', 'HomeController@destroy')->name('home.destroy');
		Route::get('/home/delete1/{id}', 'HomeController@delete1')->name('home.delete1');
		Route::post('/home/delete1/{id}', 'HomeController@destroy1')->name('home.destroy1');
	    Route::get('/home/delete2/{id}', 'HomeController@delete2')->name('home.delete2');
		Route::post('/home/delete2/{id}', 'HomeController@destroy2')->name('home.destroy2');
		Route::get('/home/edit2/{id}', ['as'=>'home.edit2','uses'=>'HomeController@edit2']);
		Route::post('/home/edit2/{id}', 'HomeController@update');
	//	Route::get('home.list2/search', 'HomeController@searchBus')->name('search');
        Route::get('searchCounter', 'HomeController@searchCounter')->name('searchCounter');
		Route::get('search', 'HomeController@searchBus')->name('search');

});