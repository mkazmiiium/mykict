<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('auth.login');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    // Set welcome-dashboard as the main dashboard
    Route::get('/dashboard', function () {
        return view('admin/welcome-dashboard');
    })->name('dashboard');

    // Route for admin dashboard
    Route::get('admin-dashboard', function () {
        return view('admin/admin-dashboard');
    })->name('admin.dashboard');

    // Route for teacher dashboard
    Route::get('teacher-dashboard', function () {
        return view('admin/teacher-dashboard');
    })->name('teacher.dashboard');

    // Route for student dashboard
    Route::get('student-dashboard', function () {
        return view('admin/student-dashboard');
    })->name('student.dashboard');
});


// Route for Academicians Dashboard
Route::get('SEMS-dashboard', function () {
    return view('SEMS.SEMS-dashboard');
})->name('SEMS.dashboard');

// Route for Course Coordinator Page
Route::get('create-question', function () {
    return view('SEMS.create-question');
})->name('create.question');

// Route for Course Coordinator Page
Route::get('vetters-page', function () {
    return view('SEMS.vetters-page');
})->name('vetters.page');

// Route for Course Coordinator Page
Route::get('assign-vetters', function () {
    return view('SEMS.assign-vetters');
})->name('assign.vetters');



