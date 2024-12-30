<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('auth.login');
});

// Route::get('admin-dashboard', function () {
//     return view('admin/admin-dashboard');
// });

// Route::get('teacher-dashboard', function () {
//     return view('admin/teacher-dashboard');
// });

// Route::get('student-dashboard', function () {
//     return view('admin/student-dashboard');
// });

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('admin/admin-dashboard');
    })->name('dashboard');
});
