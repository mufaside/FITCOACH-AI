<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// Landing Page
Route::get('/', function () {
    return view('pages.landing');
});

// Onboarding
Route::get('/onboarding', function () {
    return view('pages.onboarding');
});

// Main Application Routes
Route::get('/dashboard', function () {
    return view('pages.dashboard');
});

Route::get('/workout', function () {
    return view('pages.workout');
});

Route::get('/live-exercise', function () {
    return view('pages.live-exercise');
});

Route::get('/nutrition', function () {
    return view('pages.nutrition');
});

Route::get('/progress', function () {
    return view('pages.progress');
});

Route::get('/history', function () {
    return view('pages.history');
});

Route::get('/ai-coach', function () {
    return view('pages.ai-coach');
});

Route::get('/profile', function () {
    return view('pages.profile');
});

Route::get('/settings', function () {
    return view('pages.settings');
});
