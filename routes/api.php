<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Api\Controllers\Auth\LoginController;
use App\Http\Api\Controllers\Auth\RegisterController;
use App\Http\Api\Controllers\Auth\LogoutController;
use App\Http\Api\Controllers\Auth\EmailVerifyController;
use App\Http\Api\Controllers\UserDashboardController;
use App\Http\Api\Controllers\UserExplorerController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::post('/seeder-login', [LoginController::class, 'login'])->name('api.login');
Route::post('/seeder-register', [RegisterController::class, 'register'])->name('api.register');
Route::middleware('auth:api')->get('/user', function (Request $request) {
      return $request->user();
});
Route::post('/seeder-logout', [LogoutController::class, 'logout'])->name('api.logout');
Route::get('/seeder-verify-email', [EmailVerifyController::class, 'verify_email']);
//user-dashboard
Route::get('/user-dashboard', [UserDashboardController::class, 'user_dashboard']);
Route::get('/user-explorer', [UserExplorerController::class, 'user_explorer']);
Route::get('/user-explorer-month', [UserExplorerController::class, 'user_explorer_month']);
Route::get('/user-explorer-date', [UserExplorerController::class, 'user_explorer_date']);
Route::get('/user-explorer-file', [UserExplorerController::class, 'user_explorer_file']);
