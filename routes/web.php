<?php

use App\Http\Controllers\BorrowController;
use App\Http\Controllers\InstumentsController;
use App\Http\Controllers\RegisterController;
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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('authenticated.dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/perfil', function () {
    return view('authenticated.perfil');
})->middleware(['auth'])->name('perfil');

// Route::get('/borrow', function () {
//     return view('authenticated.borrow');
// })->middleware(['auth'])->name('borrow');
Route::get('/borrow',[BorrowController::class, 'index'] )->middleware(['auth'])->name('borrow');
Route::post('/borrow',[BorrowController::class, 'list'] )->middleware(['auth'])->name('borrow');

Route::get('/confirm',[BorrowController::class, 'confirm'] )->middleware(['auth'])->name('borrow');
Route::post('/confirm',[BorrowController::class, 'borrow'] )->middleware(['auth'])->name('borrow');


Route::get('/instruments/create',[InstumentsController::class, 'index'])->middleware(['auth'])->name('instCreateIndex');
Route::post('/instruments/create',[InstumentsController::class, 'create'])->middleware(['auth'])->name('instCreate');

Route::get('/instruments/models',[InstumentsController::class, 'modelIndex'])->middleware(['auth'])->name('instCreateIndex');
Route::post('/instruments/models',[InstumentsController::class, 'modelCreate'])->middleware(['auth'])->name('instCreateIndex');


Route::get('/teacher/register', [RegisterController::class, 'teacherRegisterIndex']);
Route::post('/teacher/register', [RegisterController::class, 'storeTeacher']);
require __DIR__.'/auth.php';

