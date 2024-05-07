<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\YearController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CommentController;

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
Route::get('/fekakomon', [YearController::class, 'index'])->name('home.index');

Route::post('/question', [QuestionController::class, 'show'])->name('question.show');

Route::get('/articles', [ArticleController::class, 'index'])->name('articles.index');
// 掲示板の作成画面の表示
Route::get('/articles/create', [ArticleController::class, 'create'])->name('articles.create');
// 掲示板データをデータベースに登録
Route::post('/articles/create', [ArticleController::class, 'store'])->name('articles.store');
// スレッドの詳細
Route::get('/articles/{id}', [CommentController::class, 'show'])->name('articles.show');
// コメントの作成
Route::post('/articles/{article_id}', [CommentController::class, 'store'])->name('comments.store');

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
