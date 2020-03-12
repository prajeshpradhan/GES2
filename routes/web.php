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

Route::get('/','HomeController@index')->name('index');
Route::get('/services','HomeController@services')->name('services');
Route::get('/projects','HomeController@projects')->name('projects');
Route::get('/about','HomeController@about')->name('about');

Route::prefix('admin')->group( function(){
   Route::post('/editTagline','AdminController@editTagline')->name('editTagline');
   Route::post('/addCoverImage','AdminController@addCoverImage')->name('addCoverImage');
   Route::post('/addProject','AdminController@addProject')->name('addProject');
   Route::get('/project/{id?}','AdminController@showProject')->name('project');
   Route::put('/updateProject/{id?}','AdminController@updateProject')->name('updateProject');
   Route::delete('/deleteProject/{id?}','AdminController@deleteProject')->name('deleteProject');
});

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
