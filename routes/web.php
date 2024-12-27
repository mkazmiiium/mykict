<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('login');
});

Route::get('admin-dashboard', function () {
    return view('admin/admin-dashboard');
});

Route::get('teacher-dashboard', function () {
    return view('admin/teacher-dashboard');
});

Route::get('student-dashboard', function () {
    return view('admin/student-dashboard');
});
