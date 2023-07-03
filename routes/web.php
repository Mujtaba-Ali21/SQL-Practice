<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnswerController;
use App\Http\Controllers\VotingController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\ProductDetailsController;


// Read
Route::get('/', [ProductController::class, 'read']);

// Create
Route::get('/createProduct', [ProductController::class, 'showCreate']);

Route::post('/createProduct', [ProductController::class, 'create']);


// Product Details
Route::get('/productDetails/{id}', [ProductDetailsController::class, 'show']);

Route::post('/productDetails/rate/{id}', [ProductDetailsController::class, 'rate'])->name('rate');


Route::match(['get', 'post'],'/productDetails/helpful/{id}', [VotingController::class, 'helpful']);
Route::match(['get', 'post'],'/productDetails/unhelpful/{id}', [VotingController::class, 'unhelpful']);


// Questions / Answers
Route::post('/productDetails/question/{id}', [ProductDetailsController::class, 'createQuestion'])->name('askQuestion');

Route::get('/productDetails/answer/{id}', [ProductDetailsController::class, 'createAnswer']);
Route::post('/productDetails/answer/{id}', [ProductDetailsController::class, 'saveAnswer']);