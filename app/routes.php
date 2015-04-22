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

/*Route::get('/', function()
{
	return View::make('hello');
});
*/


Route::get('login','loginController@login');	
Route::get('navbar','loginController@navbar');	


Route::post('login','loginController@postlogin');
//Route::resource('postJobs','jobsController');
//Route::resource('freelance-jobs','projectController');	

Route::group(array('before'=>'auth'),function(){

Route::get('/','HomeController@index');	
Route::get('settings','settingsController@settings');
Route::resource('logout','loginController@logout');	
//Route::resource('category','categoryController');	

Route::get('/deleteCategory/{id}', array('uses' => 'adminController@deleteCategory' , 'as' => 'DeleteCategory'));

Route::get('/editCategory/{id}', array('uses' => 'adminController@editCategory' , 'as' => 'EditCategory'));
Route::post('/storeCategory','adminController@storeCategory' );
Route::post('/updateCategory/{id}', array('uses' => 'adminController@updateCategory' , 'as' => 'updateCat'));


												 });

Route::group(array('prefix'=>'admin'),function( ) {

} );

Route::get('newcategory','adminController@newCategory')	;
Route::post('newcategory','adminController@StoreCategory' );
Route::get('/n', array('uses'=>'adminController@newCsategory','as' => 'NewCategory'));
