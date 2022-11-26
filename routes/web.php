<?php

use App\Http\Controllers\NewsapiController;
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

Route::controller(NewsapiController::class)->group(function () {
    Route::get('/', 'index')->name('newsapi.index');
    Route::get('everything', 'everything')->name('newsapi.everything');
    Route::get('top-headlines', 'topHeadlines')->name('newsapi.top_headlines');
    Route::get('top-headlines/sources', 'topHeadlinesSources')->name('top_headlines_sources');
});
