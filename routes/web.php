<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PanelController;
use App\Http\Controllers\AnswerController;
use App\Http\Controllers\VotingController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\ProductDetailsController;


// Access All Routes
Route::get('/allRoutes', function () {
    return view('allRoutes');
});

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


Route::get('/QnATable', [QuestionController::class, 'read']);

Route::get('/askQuestion', [QuestionController::class, 'askQuestion']);
Route::post('/askQuestion', [QuestionController::class, 'createQuestion']);

Route::get('/question/edit/{id}', [QuestionController::class, 'showUpdate']);
Route::post('/question/edit/{id}', [QuestionController::class, 'update']);

Route::get('/question/delete/{id}', [QuestionController::class, 'delete']);


Route::get('/answer/edit/{id}', [QuestionController::class, 'showAnsUpdate']);
Route::post('/answer/edit/{id}', [QuestionController::class, 'updateAns']);

Route::get('/answer/delete/{id}', [QuestionController::class, 'deleteAns']);


// Admin Panel
Route::get('/adminPanel', [PanelController::class, 'read']);

Route::get('/createEntry', [PanelController::class, 'createEntry']);
Route::post('/createEntry', [PanelController::class, 'create']);

Route::get('editRow/{id}', [PanelController::class, 'showUpdate']);
Route::post('editRow/{id}', [PanelController::class, 'update']);

Route::match(['get', 'post'], 'dropRow/{id}', [PanelController::class, 'delete']);


