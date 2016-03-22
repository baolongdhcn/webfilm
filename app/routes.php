<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

//login - logout
Route::get('login', array('uses' => 'AdminController@showLogin'));
Route::post('login', array('uses' => 'AdminController@doLogin'));
Route::get('logout', array('uses' => 'AdminController@doLogout'));

//homecontroller
Route::get('/', array('as'=>'trangchu','uses'=>'HomeController@home'));


//admincontroller
Route::group(array('prefix' =>'admin','before' =>'authAdmin'),function()
{		
		//dashboard
		Route::get('dashboard',array( 'as'=>'admin.dashboard','uses'=>'AdminController@admin'));
    	Route::get('dashboard/index',array( 'as'=>'admin.dashboard','uses'=>'AdminController@index'));

    	/****************************************************************************/


    	//users
		Route::get('user',array( 'as'=>'admin.user', 'uses'=>'AdminController@user'));
		Route::get('user/edit/{id}',array( 'as'=>'edit_user', 'uses'=>'AdminController@edit_user'));
		Route::post('post_edit_user',array( 'as'=>'post_edit_user', 'uses'=>'AdminController@post_edit_user'));


		 //Slider (home)
		Route::get('slider',array( 'as'=>'slider', 'uses'=>'BackendController@slider'));
		Route::get('slider/edit/{id}',array( 'as'=>'edit_slider', 'uses'=>'BackendController@edit_slider'));
		Route::post('post_edit_slider',array( 'as'=>'post_edit_slider', 'uses'=>'BackendController@post_edit_slider'));
		Route::get('delete_slider/{id}',array( 'as'=>'delete_slider', 'uses'=>'BackendController@delete_slider'));
		Route::get('slider/insert',array( 'as'=>'create_slider', 'uses'=>'BackendController@create_slider'));
		Route::post('post_create_slider',array( 'as'=>'post_create_slider', 'uses'=>'BackendController@post_create_slider'));

		//news (home)
		Route::get('news',array( 'as'=>'news', 'uses'=>'BackendController@news'));
		Route::get('news/edit/{id}',array( 'as'=>'edit_news', 'uses'=>'BackendController@edit_news'));
		Route::post('post_edit_news',array( 'as'=>'post_edit_news', 'uses'=>'BackendController@post_edit_news'));
		Route::get('delete_news/{id}',array( 'as'=>'delete_news', 'uses'=>'BackendController@delete_news'));
		Route::get('news/insert',array( 'as'=>'create_news', 'uses'=>'BackendController@create_news'));
		Route::post('post_create_news',array( 'as'=>'post_create_news', 'uses'=>'BackendController@post_create_news'));

});
?>