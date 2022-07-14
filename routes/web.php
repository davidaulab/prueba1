<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ContactController;
use App\Http\Controllers\LocalController;
use App\Http\Controllers\SuggestController;

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
    return redirect() -> route('localhome');
}) -> name ('home');


Route::get ('/login', [LocalController::class, 'login']);


Route::get ('/index', [LocalController::class, 'index']) -> name('localhome');



Route::get('/local/{id}', [LocalController::class, 'show'])->name ('localshow');


Route::get('/local', [LocalController::class, 'create']) -> name('local');

Route::post('/local', [LocalController::class, 'store']);


Route::get('/about', function () {
    return view('about', ['empName' => 'Aulab.es']);
}) -> name('about');

Route::get('/contact', [ContactController::class, 'show']) -> name('contact');

Route::post('/contact', [ContactController::class, 'store']);


Route::get ('/brewery', [SuggestController::class, 'create']);

Route::post ('/brewery', [SuggestController::class, 'store'])-> name('suggestbrewery');
