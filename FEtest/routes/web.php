<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\YearController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\ArticleController;
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

Route::get('/board', [ArticleController::class, 'index'])->name('article.index');

//管理画面
use App\Http\Controllers\Admin;

Route::prefix('admin')->group(function () {
    Route::get('login', [Admin\LoginController::class, 'index'])->name('admin.login.index');
    Route::post('login', [Admin\LoginController::class, 'login'])->name('admin.login.login');
    Route::get('logout', [Admin\LoginController::class, 'logout'])->name('admin.loin.logout');

    Route::get('/', [Admin\IndexController::class, 'index'])->name('admin.index');
});

//管理者 (administratorsテーブル) 未承認の場合にログインフォームに強制リダイレクトさせるミドルウェアを設定する。　
Route::prefix('admin')->middleware('auth:administrators')->group(function () {
    Route::get('/', [Admin\IndexController::class, 'index'])->name('admin.index');
});

//フロント
use App\Http\Controllers;

Route::get('register', function () {
    return view('login.register');
})->name('login.register');

Route::get('login', [Controllers\LoginController::class, 'index'])->name('login.index');
Route::post('login', [Controllers\LoginController::class, 'login'])->name('login.login');
Route::get('logout', [Controllers\LoginController::class, 'logout'])->name('login.logout');
