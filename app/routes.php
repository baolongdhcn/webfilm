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


		

});
?>