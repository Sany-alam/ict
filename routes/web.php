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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('index');
});

Route::get('Study', function () {
    return view('Study.index');
});

Route::get('Newsfeed', function () {
    return view('Newsfeed.index');
});


// practice & compiler page
Route::get('practice', function () {
    return view('Practice.index');
});
Route::prefix('practice')->group(function () {
    Route::get('c_compiler','PracticeController@index');
    Route::post('c_complier','PracticeController@c_compiler');
});

// board question routes
Route::get('board-questions','BoardquestionController@index');
Route::get('SearchBoardQuestion/{id}','BoardquestionController@show');
Route::post('question_submit','BoardquestionController@question_submit');
Route::get('CorrectAnswers','BoardquestionController@correctanswers');


// Study topic pages
Route::get('Study/Chapter-5/Topic-1', function () {
    return view('Study.Topic-5.1');
});
Route::get('Study/Chapter-5/Topic-2', function () {
    return view('Study.Topic-5.2');
});
Route::get('Study/Chapter-5/Topic-3', function () {
    return view('Study.Topic-5.3');
});
Route::get('Study/Chapter-5/Topic-4', function () {
    return view('Study.Topic-5.4');
});
Route::get('Study/Chapter-5/Topic-5', function () {
    return view('Study.Topic-5.5');
});
Route::get('Study/Chapter-5/Topic-6', function () {
    return view('Study.Topic-5.6');
});
Route::get('Study/Chapter-5/Topic-7', function () {
    return view('Study.Topic-5.7');
});
Route::get('Study/Chapter-5/Topic-8', function () {
    return view('Study.Topic-5.8');
});
Route::get('Study/Chapter-5/Topic-9', function () {
    return view('Study.Topic-5.9');
});
Route::get('Study/Chapter-5/Topic-10', function () {
    return view('Study.Topic-5.10');
});
Route::get('Study/Chapter-5/Topic-11', function () {
    return view('Study.Topic-5.11');
});
Route::get('Study/Chapter-5/Topic-12', function () {
    return view('Study.Topic-5.12');
});
Route::get('Study/Chapter-5/Topic-13', function () {
    return view('Study.Topic-5.13');
});
Route::get('Study/Chapter-5/Topic-14', function () {
    return view('Study.Topic-5.14');
});
Route::get('Study/Chapter-5/Topic-15', function () {
    return view('Study.Topic-5.15');
});
Route::get('Study/Chapter-5/Topic-16', function () {
    return view('Study.Topic-5.16');
});
Route::get('Study/Chapter-5/Topic-17', function () {
    return view('Study.Topic-5.17');
});


// Route::post('c_compiler','PracticeController@c_compiler');
