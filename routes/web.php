<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth;
use App\Http\Controllers\Web;
use App\Http\Controllers\Controller;

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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('admin', [Auth\AuthController::class, 'index'])->name('web.login.index');
Route::post('login', [Auth\AuthController::class, 'login'])->name('web.login');
Route::get('forgot-password', [Auth\ForgotPasswordController::class, 'index'])->name('forgot.pass');
Route::get('reset-password/{token}', [Auth\ResetPasswordController::class, 'resetpassword'])->name('reset.password');
Route::post('logout', [Auth\LogoutController::class, 'logout'])->name('web.logout');

Route::group(['prefix' => 'web', 'middleware' => 'authmw'], function () {
Route::get('desboard', [Web\DashboardController::class, 'index'])->name('web.dashboard');
});

// Route::get('welcome', [Web\WebController::class, 'index']);
// Route::get('welcome', 'Web\WebController@index')->name('welcome');