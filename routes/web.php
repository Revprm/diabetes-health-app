<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\SettingsController;
use App\Http\Controllers\PredictionController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\BmiController;

Route::get('/', function () {
    return view('dashboard');
});

Route::get('/resources', function () {
    return view('resources');
});

Route::get('/resources/article', function () {
    return view('article');
});

Route::get('/resources/article/understanding-diabetes', function () {
    return view('article.understanding-diabetes');
});

Route::get('/resources/article/healthy-eating', function () {
    return view('article.healthy-eating');
});

Route::get('/resources/article/effective-exercise', function () {
    return view('article.effective-exercise');
});

Route::get('/resources/article/meal-planning', function () {
    return view('article.meal-planning');
});

Route::get('/resources/article/stress-management', function () {
    return view('article.stress-management');
});

Route::get('/resources/tools/bmi-calculator', function () {
    return view('tools.bmi-calculator');
});
Route::post('/resources/tools/bmi-calculator', [BmiController::class, 'calculate'])->name('bmi.calculate');

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
    Route::get('/user/dashboard', [UserController::class, 'indexUser'])->name('user.dashboard');

    Route::get('/user/setting', function () {
        return view('user.setting');
    })->name('user.setting');
    Route::post('/user/setting', [SettingsController::class, 'update'])->name('user.setting.update');

    Route::get('/user/predict', [PredictionController::class, 'indexUser'])->name('user.predict');
    Route::get('/user/predict/create', [PredictionController::class, 'createUser'])->name('user.predict.create');
    Route::post('/user/predict/create', [PredictionController::class, 'predictUser'])->name('user.predict.create');

    Route::get('/user/support', [ReportController::class, 'index'])->name('support.index');
    Route::post('/user/support', [ReportController::class, 'store'])->name('support.store');
    Route::get('/user/support/{id}', [ReportController::class, 'show'])->name('support.show');

    Route::get('/admin/dashboard', function () {
        return view('admin.dashboard');
    })->name('admin.dashboard');

    // Admin Settings Page
    Route::get('/admin/setting', function () {
        return view('admin.setting');
    })->name('admin.setting');

    Route::post('/admin/setting', [SettingsController::class, 'update'])->name('admin.setting.update');

    // Admin User Management Page
    Route::get('/admin/user-management', [UserController::class, 'indexAdmin'])->name('admin.userManagement');
    Route::delete('/admin/user-management/{user}', [UserController::class, 'destroyAdmin'])->name('admin.userManagement.destroy');
    Route::post('/admin/user-management', [UserController::class, 'storeAdmin'])->name('admin.userManagement.store');
    Route::post('/admin/user-management/{user}', [UserController::class, 'updateAdmin'])->name('admin.userManagement.update');


    // Admin Predictions Page
    Route::get('/admin/prediction', [PredictionController::class, 'indexAdmin'])->name('admin.prediction');
    Route::get('/admin/prediction/create', [PredictionController::class, 'createAdmin'])->name('admin.prediction.create');
    Route::post('/admin/prediction/create', [PredictionController::class, 'storeAdmin'])->name('admin.prediction.store');
    Route::delete('/admin/prediction/{prediction}', [PredictionController::class, 'destroyAdmin'])->name('admin.prediction.destroy');

    // Admin Support Page
    Route::get('/admin/support', [ReportController::class, 'indexAdmin'])->name('admin.support');
    Route::get('/admin/support/{id}', [ReportController::class, 'show'])->name('admin.support.show');
    Route::post('/admin/support/{report}/respond', [ReportController::class, 'respond'])->name('admin.support.respond');

});
