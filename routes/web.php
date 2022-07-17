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
Auth::routes();
//PART A
Route::get('/', function () {
    return view('welcome');
});

Route::get('/contact', function () {
   return "Manveet Kaur";
});

Route::get('/statement', function (){
    return "Laravel makes it easy to develop websites!";
});

Route::get('uid/{id}', function ($id){
    return "ID: $id";
})->where('id', '[0-9]+');

Route::group(['as'=> 'users.', 'prefix'=>'users'], function (){

    Route::get('{user?}',function ($user = "batman"){
        return "Name: $user";
    })->name('show');

    Route::get('{user}/images/{image}',function ($user,$image){
        return "Name : $user Image: $image";
    })->name('images.show');
});

//PART B
/*Route::get('aboutme',function (){
    return view('pages.about',["fullName" => "Manveet Kaur"]);
})->name('aboutme.show');*/

Route::get('aboutme',function (){
    $name = ["fullName" => "Manveet Kaur"];
    return view('pages.about',$name);
})->name('aboutme.show');

Route::get('thingsiknow', function (){
    $items = ['C#','Phython','PHP','Microsoft Office'];
    return view('pages/langs', compact('items'));
})->name('thingsiknow.show');

Route::get('contact', function (){
    $email = "w0782002@myscc.ca";
    return view('pages/contact', compact("email"));
})->name('contact.show');


// PART C
//Route::get('articles', 'ArticleController@index')->name('articles.index');
//Route::get('articles/{article}', 'ArticleController@show')->name('articles.show');

//Route::get('categories', 'CategoryController@index')->name('categories.index');
//Route::get('categories/{category}', 'CategoryController@show')->name('categories.show');

Route::resource('categories','CategoryController');
Route::resource('articles','ArticleController');
/*
Route::get('categories','CategoryController@index')->name('categories.index');
Route::get('categories/create','CategoryController@create')->name('categories.create');
Route::post('categories/','CategoryController@store')->name('categories.store');
Route::get('categories/{category}','CategoryController@show')->name('categories.show');

Route::get('articles/create','ArticleController@create')->name('articles.create');
Route::post('articles/','ArticleController@store')->name('articles.store');
Route::get('articles','ArticleController@index')->name('articles.index');
Route::get('articles/{article}','ArticleController@show')->name('articles.show');

Route::get('categories/{category}/edit','CategoryController@edit');
Route::patch('categories/{category}', 'CategoryController@update');

Route::delete('categories/{category}', 'CategoryController@destory')->named('category.destory');
Route::delete('articles/{article}', 'ArticleController@destory')->named('articles.destory');
*/

Route::get('categories/manage', 'CategoryController@showDeleted')->name('categories.showDeleted');
Route::get('categories/{category}/forceDelete', 'CategoryController@forceDelete')->name('categories.forceDelete');
Route::get('categories/{category}/restore','CategoryController@restore')->name('categories.restore');


