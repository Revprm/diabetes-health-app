<?php

use App\Http\Controllers\Admin\PredictionController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\SettingsController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\UserPredictionController;

Route::get('/', function () {
    return view('dashboard');
});

Route::get('/resources', function () {
    return view('resources');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware('auth')->group(function () {
    Route::get('/user/dashboard', function () {
        return view('user.dashboard');
    })->name('user.dashboard');

    Route::get('/user/setting', function () {
        return view('user.setting');
    })->name('user.setting');

    Route::post('/user/setting', [SettingsController::class, 'update'])->name('user.setting.update');

    Route::get('/user/predict', [UserPredictionController::class, 'index'])->name('user.predict');
    Route::get('/user/predict/create', [UserPredictionController::class, 'create'])->name('user.predict.create');
    Route::post('/user/predict/create', [UserPredictionController::class, 'predict'])->name('user.predict.create');

    Route::get('/admin/dashboard', function () {
        return view('admin.dashboard');
    })->name('admin.dashboard');

    // Admin Settings Page
    Route::get('/admin/setting', function () {
        return view('admin.setting');
    })->name('admin.setting');

    Route::post('/admin/setting', [SettingsController::class, 'update'])->name('admin.setting.update');

    // Admin User Management Page
    Route::get('/admin/user-management', [UserController::class, 'index'])->name('admin.userManagement');
    Route::delete('/admin/user-management/{user}', [UserController::class, 'destroy'])->name('admin.userManagement.destroy');
    Route::post('/admin/user-management', [UserController::class, 'store'])->name('admin.userManagement.store');
    Route::post('/admin/user-management/{user}', [UserController::class, 'update'])->name('admin.userManagement.update');


    // Admin Predictions Page
    Route::get('/admin/prediction', [PredictionController::class, 'index'])->name('admin.prediction');
    Route::get('/admin/prediction/create', [PredictionController::class, 'create'])->name('admin.prediction.create');
    Route::post('/admin/prediction/create', [PredictionController::class, 'store'])->name('admin.prediction.store');
    Route::delete('/admin/prediction/{prediction}', [PredictionController::class, 'destroy'])->name('admin.prediction.destroy');
});
