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




Route::group(['prefix' => 'admin','middleware'=>['auth','isAdmin']], function() {

Route::get('/dashboard', function () {
    return view('backend.master');
});

//all users

    Route::get('/alluser', '\App\Http\Controllers\Admin\allUserController@index')->name('allUser');
    Route::get('/changeStatus/{id}', '\App\Http\Controllers\Admin\allUserController@changeStatus')->name('changeStatus');
    Route::post('/updateStatus/{id}', '\App\Http\Controllers\Admin\allUserController@updateStatus')->name('updateStatus');


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

    Route::get('contest/specificUsers/{id}', '\App\Http\Controllers\Admin\ContestController@contestSpecific')->name('contest.specificUsers');

//contest_code seacrh
 Route::post('contest/codesearch', '\App\Http\Controllers\Admin\ContestController@contestCodeSearch')->name('contest.search');


    //contest result
     Route::get('contest/result', '\App\Http\Controllers\Admin\ContestResultController@contestResult')->name('contest.result');
         //contest result edit
       Route::get('contestSelection/edit/{id}', '\App\Http\Controllers\Admin\ContestResultController@contestResultEdit')->name('contest.selectEdit');

     //contest selection
     Route::get('contest/selection/{id}', '\App\Http\Controllers\Admin\ContestWinnerController@contestSelection')->name('contest.select');

      Route::post('contest/selectionStore', '\App\Http\Controllers\Admin\ContestWinnerController@contestSelectionStore')->name('contest.selectionStore');

    Route::post('contest/selectionUpdate/{id}', '\App\Http\Controllers\Admin\ContestWinnerController@contestSelectionUpdate')->name('contest.selectUpdate');


//all winner
    Route::get('all/winner', '\App\Http\Controllers\Admin\ContestWinnerController@allWinner')->name('all-winner');

});

Auth::routes();


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');







//frontend routes
Route::get('/',  '\App\Http\Controllers\Frontend\FrontendController@index')->name('contest');
Route::get('/past-contest',  '\App\Http\Controllers\Frontend\FrontendController@pastContest')->name('past-contest');
Route::get('/contest-desc/{id}',  '\App\Http\Controllers\Frontend\FrontendController@contestDescription')->name('contest-desc');
Route::get('/contest-form/{id}',  '\App\Http\Controllers\Frontend\FrontendController@contestForm')->name('contest-form')->middleware('auth');
Route::post('/contest/store',  '\App\Http\Controllers\Frontend\FrontendController@contestStore')->name('contest-store')->middleware('auth');


Route::get('/my-contest',  '\App\Http\Controllers\Frontend\ProfileController@myContest')->name('my-contest');
Route::get('/my-profile',  '\App\Http\Controllers\Frontend\ProfileController@myProfile')->name('my-profile');
Route::post('/update-password/{id}',  '\App\Http\Controllers\Frontend\ProfileController@updatePassword')->name('update-password');
Route::post('/userupdate-profile/{id}',  '\App\Http\Controllers\Frontend\ProfileController@updateProfile')->name('userupdate-profile');
Route::get('/userprofile/view',  '\App\Http\Controllers\Frontend\ProfileController@profileView')->name('my-profileView');


Route::get('/all-runningContest/{id}',  '\App\Http\Controllers\Frontend\FrontendController@runningContest')->name('all-runningContest');
Route::get('/past-contestWinner/{id}',  '\App\Http\Controllers\Frontend\FrontendController@pastContestWinner')->name('past-contestWinner');
Route::get('/contestform-edit/{id}',  '\App\Http\Controllers\Frontend\FrontendController@contestformEdit')->name('contestform-edit');
Route::post('/userConform-update/{id}',  '\App\Http\Controllers\Frontend\FrontendController@contestformUpdate')->name('userConform-update');


//download files
Route::get('/download/{file}', '\App\Http\Controllers\Admin\DownloadsController@download');


//about page routes
Route::get('/about', '\App\Http\Controllers\Frontend\FrontendController@about');

//contact page 
Route::get('/contact', '\App\Http\Controllers\Frontend\FrontendController@contact');




