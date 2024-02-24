<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QuestionController;

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

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/questions',[QuestionController::class, 'index'])->name('questions.display');

Route::get('/questions/add',function () {
    return view('questions.create');
})->name('questions.add');

Route::post('/questions/store',[QuestionController::class, 'create'])->name('questions.create');
Route::get('/questions/{id}',[QuestionController::class, 'show'])->name('answers.display');
Route::get('/question/edit/{id}', [QuestionController::class, 'edit'])->name('question.edit');
Route::put('/question/edit/{id}', [QuestionController::class, 'save'])->name('question.save');
Route::delete('/question/delete/{id}', [QuestionController::class, 'delete'])->name('question.delete');
