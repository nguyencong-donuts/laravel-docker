<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\Authenticate;

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

Route::redirect('/', 'login');

// ログイン
Route::get('login', [AuthController::class, 'login'])->name('login');
Route::post('post-login', [AuthController::class, 'postLogin'])->name('login.post');

// 楼録
Route::get('register', [AuthController::class, 'register'])->name('register');
Route::post('post-registration', [AuthController::class, 'postRegister'])->name('register.post');

// 管理者ページ
Route::redirect('admin', 'admin/dashboard');
Route::prefix('admin')->middleware([Authenticate::class])->group(function() {
        //　ダッシュボード
        Route::get('/dashboard', [AuthController::class, 'index'])->name('dashboard');

        // ユーザー一覧
        Route::get('users', [UserController::class, 'index'])->name('users');
        Route::prefix('users')->group(function() {
                // ユーザー追加
                Route::get('create', [UserController::class, 'create'])->name('users.create');
                //　ユーザー更新
                Route::get('edit', [UserController::class, 'edit'])->name('users.edit');
                //　ユーザー削除
                Route::delete('delete', [UserController::class, 'delete'])->name('users.delete');
                // ユーザー保存
                Route::post('save', [UserController::class, 'save'])->name('users.save');
                // ユーザーアップデート
                Route::put('update', [UserController::class, 'update'])->name('users.update');
        });
});

//　ログアウト
Route::get('logout', [AuthController::class, 'logout'])->name('logout');
