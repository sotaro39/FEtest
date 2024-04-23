<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\YearController;
use App\Http\Controllers\QuestionController;
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
    return view('home');
});
Route::get('/fekakomon.php', [YearController::class, 'index'])->name('kakomon.index');

Route::post('/question', [QuestionController::class, 'show'])->name('question.show');

//管理画面
use App\Http\Controllers\Admin;

Route::prefix('admin')->group(function () {
    Route::get('login', [Admin\LoginController::class, 'index'])->name('admin.login.index');
    Route::post('login', [Admin\LoginController::class, 'login'])->name('admin.login.login');
    Route::get('logout', [Admin\LoginController::class, 'logout'])->name('admin.loin.logout');

    Route::get('/', [Admin\IndexController, 'index'])->name('admin.index');
});

//フロント
use App\Http\Controllers;

Route::get('login', [Controllers\LoginControllers::class, 'index'])->name('login.index');
Route::post('login', [Controllers\LoginController::class, 'login'])->name('login.loin');
Route::get('logout', [Controllers\LoinController::class, 'logout'])->name('login.logout');
Route::get('/', [Controllers\IndexController::class, 'index'])->name('index');
