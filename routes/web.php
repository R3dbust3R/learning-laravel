<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/**
 *
 * HTTP REQUESTS
 * GET      : READ
 * POST     : ADD
 * PUT      : FULL EDIT
 * PATCH    : PART EDIT
 * DELETE   : DELETE
 *
 * 
 * -- Route with function
 * Route::get('/page/{name}', function (Request $request) {
 *    dd($request->name);
 *    return view('page');
 * });
 * 
 * -- Route with Controller
 * Route::get('path', ['namespace_path\controller_name', 'method_name']);
 *
 */

use App\Http\Controllers\homeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\profileController;
use App\Http\Controllers\profilesController;
use App\Http\Controllers\settingsController;





Route::resource('post', PostController::class);
Route::resource('comment', PostController::class);

Route::get('/', [homeController::class, 'index'])->name('home')->middleware('auth');

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');

Route::post('/login/check', [LoginController::class, 'check'])->name('login-check');

Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/profile', [profileController::class, 'index'])->name('profile')->middleware('auth');

Route::get('/profile/create', [profileController::class, 'create'])->name('profile-create')->middleware('guest');

Route::post('/profile/store', [profileController::class, 'store'])->name('profile-store');

Route::get('/profiles', [profilesController::class, 'index'])->name('profiles')->middleware('auth');

Route::get('/show-profile/{profile}', [profileController::class, 'show'])->name('show-profile')->where('id', '\d+')->middleware('auth');

Route::delete('/profile/{profile}', [profileController::class, 'delete'])->name('profile-delete')->middleware('auth');

Route::get('/profile/edit/{profile}', [profileController::class, 'show_edit'])->name('edit-profile')->middleware('auth');

Route::put('/profile/update/{profile}', [profileController::class, 'profile_update'])->name('profile-update')->middleware('auth');

Route::get('/settings', [settingsController::class, 'index'])->name('settings')->middleware('auth');
