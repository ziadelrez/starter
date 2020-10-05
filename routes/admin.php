<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/admin', function () {
    return 'welcome Admin ziad : ' ;
});

//Route::namespace('Front')->group(function(){
//    //all route only acces controller or methods in folder Front
//    Route::get('users','userController@showAdminName');
//
//});

//Route::prefix('users')->group(function(){
//    //all route only acces controller or methods in folder Front
//    Route::get('show','userController@showAdminName');
//    Route::get('delete','userController@showAdminName');
//    Route::get('edit','userController@showAdminName');
//    Route::get('update','userController@showAdminName');
//
//});


//Route::group(['prefix' => 'users' ,'middleware'=>'auth'],function(){
//    //all route only acces controller or methods in folder Front
//    Route::get('display',function(){
//       return 'this is middle ware section';
//
//    });
//    Route::get('show','userController@showAdminName');
//    Route::get('delete','userController@showAdminName');
//    Route::get('edit','userController@showAdminName');
//    Route::get('update','userController@showAdminName');
//
//});


Route::get('runapp',function(){
    return 'this is middle ware section';

})->middleware('auth');

//Route::get('showname/{id}','Front\SecondController@showname');

Route::group(['namespace'=>'Front'],function(){
    //all route only acces controller or methods in folder Front
    Route::get('displayadmin/{id}','SecondController@showname');
    Route::get('showname/{id}','SecondController@showname');
    Route::get('showname1/{id}','SecondController@showname1');
    Route::get('showname2/{id}','SecondController@showname2');
});

Route::resource('news','NewsController');
