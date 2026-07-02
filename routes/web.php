<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProjectController;

// Halaman utama portfolio
Route::get('/', [HomeController::class, 'index']);

// Menampilkan form input password
Route::get('/manage/login', function () {
    if (session('is_admin_logged_in') === true) {
        return redirect()->route('projects.index');
    }
    return view('project-login');
})->name('project.login');

// Memproses inputan password dari user
Route::post('/manage/login', function (Request $request) {
    $staticPassword = 'nazril';

    if ($request->input('portfolio_password') === $staticPassword) {
        session(['is_admin_logged_in' => true]);
        return redirect()->route('projects.index');
    }

    return redirect()->back()->with('error', 'Password salah! Akses ditolak.');
})->name('project.login.submit');

Route::middleware([\App\Http\Middleware\ProtectProjectDashboard::class])->group(function () {
    
    // Route resource lamamu sekarang aman di dalam sini
    Route::resource('projects', ProjectController::class);
    
});