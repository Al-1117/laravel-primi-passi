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
  return view('partials/home');
})->name('home');

Route::get('/corso', function () {
  return view('partials/corso');
})->name('corso');

Route::get('/dopo_corso', function () {
  return view('partials/dopo_corso');
})->name('dopo_corso');


Route::get('/frequent_questions', function () {
  $left_faqs = config('faqs.left_faqs');
  $right_faqs = config('faqs.right_faqs');

  return view('partials/frequent_questions',
  [
  'left_faqs' => $left_faqs,
  'right_faqs' => $right_faqs
  ]);

})->name('frequent_questions');
