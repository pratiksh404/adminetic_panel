<?php

use App\Http\Controllers\Admin\SocialiteController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::admin();

/* OAuth Routes */
Route::get('sign-in/github', [SocialiteController::class, 'github'])->name('sign_in_github');
Route::get('sign-in/github/redirect', [SocialiteController::class, 'githubRedirect'])->name('sign_in_github_redirect');

Route::get('sign-in/facebook', [SocialiteController::class, 'facebook'])->name('sign_in_facebook');
Route::get('sign-in/facebook/redirect', [SocialiteController::class, 'facebookRedirect'])->name('sign_in_facebook_redirect');

Route::get('sign-in/google', [SocialiteController::class, 'google'])->name('sign_in_google');
Route::get('sign-in/google/redirect', [SocialiteController::class, 'googleRedirect'])->name('sign_in_google_redirect');
