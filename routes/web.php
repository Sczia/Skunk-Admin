<?php

use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\Admin\ClientRecordController;
use App\Http\Controllers\Admin\ExpenseController;
use App\Http\Controllers\Admin\NewClientController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

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

Route::controller(HomeController::class)->group(function () {
    Route::get('/', 'home')->name('home.index');
    Route::get('/login', 'loginForm')->name('login.index');
    Route::post('/login', 'login')->name('login.store');
    Route::post('/logout',  'logout')->name('logout.delete')->middleware('auth');
});
Route::middleware(['auth','alert'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', [AdminDashboardController::class, 'index'])->name('dashboard.index');
    Route::prefix('client')->name('client.')->group(function () {
        /* CLIENT-RECORD*/
        Route::prefix('record')->name('record.')->controller(ClientRecordController::class)->group(function () {
            Route::get('/', 'index')->name('index');
            Route::get('/{id}', 'show')->name('show');
            Route::post('/store', 'store')->name('store');
            Route::put('/{id}/edit', 'edit')->name('edit');
            Route::put('/{id}/update', 'update')->name('update');
            Route::delete('/{id}/destroy', 'destroy')->name('destroy');
        });
        /* NEW CLIENTS*/
        Route::prefix('new')->name('new.')->controller(NewClientController::class)->group(function () {
            Route::get('/', 'index')->name('index');
            Route::get('/{id}', 'show')->name('show');
            Route::post('/store', 'store')->name('store');
            Route::put('/{id}/edit', 'edit')->name('edit');
            Route::put('/{id}/update', 'update')->name('update');
            Route::delete('/{id}/destroy', 'destroy')->name('destroy');
        });
    });
    /* SERVICES*/
    Route::prefix('service')->name('service.')->controller(ServiceController::class)->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/{id}', 'show')->name('show');
        Route::post('/store', 'store')->name('store');
        Route::put('/{id}/edit', 'edit')->name('edit');
        Route::put('/{id}/update', 'update')->name('update');
        Route::delete('/{id}/destroy', 'destroy')->name('destroy');
    });

    /* EXPENSE*/
    Route::prefix('expense')->name('expense.')->controller(ExpenseController::class)->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/{id}', 'show')->name('show');
        Route::post('/store', 'store')->name('store');
        Route::put('/{id}/edit', 'edit')->name('edit');
        Route::put('/{id}/update', 'update')->name('update');
        Route::delete('/{id}/destroy', 'destroy')->name('destroy');
    });
    /* EXPENSE*/
    Route::prefix('user')->name('user.')->controller(UserController::class)->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/{id}', 'show')->name('show');
        Route::post('/store', 'store')->name('store');
        Route::put('/{id}/edit', 'edit')->name('edit');
        Route::put('/{id}/update', 'update')->name('update');
        Route::delete('/{id}/destroy', 'destroy')->name('destroy');
    });

});
