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

// Route::get('/', function () {
//     return view('home');
// })->name('home');
Route::get('/', [ArticleController::class, 'showHomePageWithComments'])->name('home.withComments');
Route::get('/fekakomon', [YearController::class, 'index'])->name('home.index');

Route::post('/question', [QuestionController::class, 'show'])->name('question.show');

/* sidepages */
Route::view('/feis', 'sidepages/feis');
Route::view('/merit', 'sidepages/merit');
Route::view('/overview', 'sidepages/overview');
Route::view('/scope', 'sidepages/scope');
Route::view('/formality', 'sidepages/formality');
Route::view('/study', 'sidepages/study');
Route::view('/level', 'sidepages/level');
Route::view('/exemption', 'sidepages/exemption');
Route::view('/text', 'sidepages/text');
Route::view('/course', 'sidepages/course');
Route::view('/question', 'sidepages/question');



Route::controller(ArticleController::class)
    ->prefix('articles')
    ->as('articles.')
    ->group(function () {
        //掲示板一覧
        Route::get('/', 'index')->name('index');
        //掲示板の検索
        Route::get('/search', 'search')->name('search');
        // 掲示板の作成画面の表示
        Route::get('/create', 'create')->name('create');
        // 掲示板データをデータベースに登録
        Route::post('/create', 'store')->name('store');
    });

Route::controller(CommentController::class)
    ->prefix('comments')
    ->as('comments.')
    ->group(function () {
        // スレッドの詳細
        Route::get('/{id}', 'show')->name('show');
        // コメントの作成
        Route::post('/{article_id}', 'store')->name('store');
        // コメントの削除
        Route::post('/{article_id}/delete',  'destroy')->name('destroy');
    });




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
