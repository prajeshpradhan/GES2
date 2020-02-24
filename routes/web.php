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

Route::prefix('admin')->group( function(){
   Route::post('/addProject','AdminController@addProject')->name('addProject');
   Route::get('/project/{id?}','AdminController@showProject')->name('project');
   Route::put('/updateProject/{id?}','AdminController@updateProject')->name('updateProject');
   Route::delete('/deleteProject/{id?}','AdminController@deleteProject')->name('deleteProject');
});

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
