<?php
//
///*
//|--------------------------------------------------------------------------
//| Application Routes
//|--------------------------------------------------------------------------
//|
//| Here is where you can register all of the routes for an application.
//| It's a breeze. Simply tell Laravel the URIs it should respond to
//| and give it the controller to call when that URI is requested.
//|
//*/
//
//Route::get('/', function () {
//    return view('welcome');
//});
//
//Route::auth();
//
//Route::get('/home', 'HomeController@index');
//
//Route::get('/post/{id}', ['as'=>'home.post', 'uses'=>'AdminPostsController@post']);
//// home.post is only the route name not a directory
//// when we use like {{route('home.post', $*->post->id)}} this
//// it will actually go to /post/{id}
//
//
//
//
//
//
//
//
//
//Route::get('/admin', function(){
//    return view('admin.index');
//});
//Route::group(['middleware'=>'admin'], function (){
//    Route::resource('admin/users', 'AdminUsersController');
//    Route::resource('admin/posts', 'AdminPostsController');
//    Route::resource('admin/categories', 'AdminCategoriesController');
//    Route::resource('admin/media', 'AdminMediasController');
//
//    Route::resource('admin/comments', 'PostCommentsController');
//    Route::resource('admin/comment/replies', 'CommentRepliesController');
//
//});
//
//
//Route::group(['middleware'=>'auth'], function (){
////    auth is for any logged in user
//
//    Route::post('comment/replay', 'CommentRepliesController@createReply');
//    // here we r not using the default store method instead we created our own method "createReply"
//
//
//
//
//});
//
//
//
//
//
//
//
//
//
