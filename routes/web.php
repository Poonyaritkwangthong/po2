<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\VoteController;
use App\Http\Controllers\ProblemController;
use App\Http\Controllers\SuggestionController;
use App\Http\Controllers\UserVoteController;
use App\Http\Controllers\FormReportController;
use App\Http\Controllers\SuggesController;
use App\Http\Controllers\VoteChartController;
use App\Http\Controllers\VotePageController;
use App\Http\Controllers\HomePageController;
use App\Http\Controllers\ProfileController;
use App\Http\Middleware\admin;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/',[HomePageController::class,'index']);
Route::get('/votepage', [VotePageController::class, 'index'])->name('votepage.index');

Route::middleware('auth')->group(function (){
Route::resource('/report',FormReportController::class);
Route::resource('/sugges',SuggesController::class);
Route::get('vote_chart',[VoteChartController::class,'dashboard']);
Route::get('/votepage/{id}', [VotePageController::class, 'vote'])->name('votepage.id');
Route::post('/votepage/store', [VotePageController::class, 'store'])->name('votepage.store');
Route::get('/profile',[ProfileController::class,'index']);
});

Auth::routes();

Route::middleware('admin')->group(function (){
Route::resource('/problem',ProblemController::class);
Route::resource('/suggestion',SuggestionController::class,);
Route::resource('/customer',CustomerController::class);
Route::resource('/news',NewsController::class);
Route::resource('/vote',VoteController::class);
Route::get('/user_vote', [UserVoteController::class, 'index']);
Route::get('/user_vote/{id}', [UserVoteController::class, 'result'])->name('result');
});




