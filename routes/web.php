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


// practice page
Route::prefix('practice')->group(function () {
    Route::get('/','PracticeController@index');
    Route::get('c_compiler','PracticeController@c_compiler_index');
    Route::post('c_complier','PracticeController@c_compiler');
    Route::get('html','PracticeController@html_index');
    Route::get('sql','PracticeController@sql_index');
});

// board question routes
Route::get('board-questions','BoardquestionController@index');
Route::get('SearchBoardQuestion/{id}','BoardquestionController@show');
Route::post('question_submit','BoardquestionController@question_submit');
Route::get('CorrectAnswers','BoardquestionController@correctanswers');


// Study topic pages *****
Route::prefix('Study')->group(function(){
    //chapter-1
    Route::prefix('Chapter-1')->group(function () {
        Route::get('Topic-1', function () { return view('Study.Topic-1.1'); });
        Route::get('Topic-2', function () { return view('Study.Topic-1.2'); });
        Route::get('Topic-3', function () { return view('Study.Topic-1.3'); });
        Route::get('Topic-4', function () { return view('Study.Topic-1.4'); });
        Route::get('Topic-5', function () { return view('Study.Topic-1.5'); });
        Route::get('Topic-6', function () { return view('Study.Topic-1.6'); });
        Route::get('Topic-7', function () { return view('Study.Topic-1.7'); });
        Route::get('Topic-8', function () { return view('Study.Topic-1.8'); });
        Route::get('Topic-9', function () { return view('Study.Topic-1.9'); });
        Route::get('Topic-10', function () { return view('Study.Topic-1.10'); });
        Route::get('Topic-11', function () { return view('Study.Topic-1.11'); });
        Route::get('Topic-12', function () { return view('Study.Topic-1.12'); });
        Route::get('Topic-13', function () { return view('Study.Topic-1.13'); });
        Route::get('Topic-14', function () { return view('Study.Topic-1.14'); });
    });

    //chapter-2
    Route::prefix('Chapter-2')->group(function () {
        Route::get('Topic-1', function () { return view('Study.Topic-2.1'); });
        Route::get('Topic-2', function () { return view('Study.Topic-2.2'); });
        Route::get('Topic-3', function () { return view('Study.Topic-2.3'); });
        Route::get('Topic-4', function () { return view('Study.Topic-2.4'); });
        Route::get('Topic-5', function () { return view('Study.Topic-2.5'); });
        Route::get('Topic-6', function () { return view('Study.Topic-2.6'); });
        Route::get('Topic-7', function () { return view('Study.Topic-2.7'); });
        Route::get('Topic-8', function () { return view('Study.Topic-2.8'); });
    });

    //chapter-3
    Route::prefix('Chapter-3')->group(function () {
        Route::get('Topic-1', function () { return view('Study.Topic-3.1'); });
        Route::get('Topic-2', function () { return view('Study.Topic-3.2'); });
        Route::get('Topic-3', function () { return view('Study.Topic-3.3'); });
        Route::get('Topic-4', function () { return view('Study.Topic-3.4'); });
        Route::get('Topic-5', function () { return view('Study.Topic-3.5'); });
        Route::get('Topic-6', function () { return view('Study.Topic-3.6'); });
        Route::get('Topic-7', function () { return view('Study.Topic-3.7'); });
        Route::get('Topic-8', function () { return view('Study.Topic-3.8'); });
        Route::get('Topic-9', function () { return view('Study.Topic-3.9'); });
        Route::get('Topic-10', function () { return view('Study.Topic-3.10'); });
    });

    //chapter-4
    Route::prefix('Chapter-4')->group(function () {
        Route::get('Topic-1', function () { return view('Study.Topic-4.1'); });
        Route::get('Topic-2', function () { return view('Study.Topic-4.2'); });
        Route::get('Topic-3', function () { return view('Study.Topic-4.3'); });
        Route::get('Topic-4', function () { return view('Study.Topic-4.4'); });
        Route::get('Topic-5', function () { return view('Study.Topic-4.5'); });
        Route::get('Topic-6', function () { return view('Study.Topic-4.6'); });
        Route::get('Topic-7', function () { return view('Study.Topic-4.7'); });
        Route::get('Topic-8', function () { return view('Study.Topic-4.8'); });
        Route::get('Topic-9', function () { return view('Study.Topic-4.9'); });
        Route::get('Topic-10', function () { return view('Study.Topic-4.10'); });
        Route::get('Topic-11', function () { return view('Study.Topic-4.11'); });
    });

    //chapter-5
    Route::prefix('Chapter-5')->group(function () {
        Route::get('Topic-1', function () { return view('Study.Topic-5.1'); });
        Route::get('Topic-2', function () { return view('Study.Topic-5.2'); });
        Route::get('Topic-3', function () { return view('Study.Topic-5.3'); });
        Route::get('Topic-4', function () { return view('Study.Topic-5.4'); });
        Route::get('Topic-5', function () { return view('Study.Topic-5.5'); });
        Route::get('Topic-6', function () { return view('Study.Topic-5.6'); });
        Route::get('Topic-7', function () { return view('Study.Topic-5.7'); });
        Route::get('Topic-8', function () { return view('Study.Topic-5.8'); });
        Route::get('Topic-9', function () { return view('Study.Topic-5.9'); });
        Route::get('Topic-10', function () { return view('Study.Topic-5.10'); });
        Route::get('Topic-11', function () { return view('Study.Topic-5.11'); });
        Route::get('Topic-12', function () { return view('Study.Topic-5.12'); });
        Route::get('Topic-13', function () { return view('Study.Topic-5.13'); });
        Route::get('Topic-14', function () { return view('Study.Topic-5.14'); });
        Route::get('Topic-15', function () { return view('Study.Topic-5.15'); });
        Route::get('Topic-16', function () { return view('Study.Topic-5.16'); });
        Route::get('Topic-17', function () { return view('Study.Topic-5.17'); });
    });

    //chapter-6
    Route::prefix('Chapter-6')->group(function () {
        Route::get('Topic-1', function () { return view('Study.Topic-6.1'); });
        Route::get('Topic-2', function () { return view('Study.Topic-6.2'); });
        Route::get('Topic-3', function () { return view('Study.Topic-6.3'); });
        Route::get('Topic-4', function () { return view('Study.Topic-6.4'); });
        Route::get('Topic-5', function () { return view('Study.Topic-6.5'); });
        Route::get('Topic-6', function () { return view('Study.Topic-6.6'); });
        Route::get('Topic-7', function () { return view('Study.Topic-6.7'); });
        Route::get('Topic-8', function () { return view('Study.Topic-6.8'); });
        Route::get('Topic-9', function () { return view('Study.Topic-6.9'); });
        Route::get('Topic-10', function () { return view('Study.Topic-6.10'); });
        Route::get('Topic-11', function () { return view('Study.Topic-6.11'); });
    });

    //chapter-7
    Route::prefix('Chapter-7')->group(function () {
        Route::get('Topic-1', function () { return view('Study.Topic-7.1'); });
    });
});
