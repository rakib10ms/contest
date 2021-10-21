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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('backend.master');
});

Route::group(['prefix' => 'admin'], function() {

//topic category
    Route::get('topic', '\App\Http\Controllers\Admin\TopicController@index')->name('topic.index');
    Route::get('topic/create', '\App\Http\Controllers\Admin\TopicController@create')->name('topic.create');
    Route::post('topic', '\App\Http\Controllers\Admin\TopicController@store')->name('topic.store');
    Route::get('topic/edit/{id}', '\App\Http\Controllers\Admin\TopicController@edit')->name('topic.edit');
    Route::post('topic/update/{id}', '\App\Http\Controllers\Admin\TopicController@update')->name('topic.update');
    Route::get('topic/destroy/{id}', '\App\Http\Controllers\Admin\TopicController@destroy')->name('topic.destroy');

//contest
     Route::get('contest', '\App\Http\Controllers\Admin\ContestController@index')->name('contest.index');
    Route::get('contest/create', '\App\Http\Controllers\Admin\ContestController@create')->name('contest.create');
    Route::post('contest', '\App\Http\Controllers\Admin\ContestController@store')->name('contest.store');
    Route::get('contest/edit/{id}', '\App\Http\Controllers\Admin\ContestController@edit')->name('contest.edit');
    Route::post('contest/update/{id}', '\App\Http\Controllers\Admin\ContestController@update')->name('contest.update');
    Route::get('contest/destroy/{id}', '\App\Http\Controllers\Admin\ContestController@destroy')->name('contest.destroy');
});