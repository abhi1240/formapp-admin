<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Api\Controllers\Auth\LoginController;
use App\Http\Api\Controllers\Auth\RegisterController;
use App\Http\Api\Controllers\Auth\LogoutController;
use App\Http\Api\Controllers\Auth\EmailVerifyController;
use App\Http\Api\Controllers\UserDashboardController;
use App\Http\Api\Controllers\UserExplorerController;
use App\Http\Api\Controllers\UserSettingsController;
use App\Http\Api\Controllers\UserImgUploadController;
use App\Http\Api\Controllers\ContentSeederController;
use App\Http\Api\Controllers\LocationController;
use App\Http\Api\Controllers\ResetPasswordController;
use App\Http\Api\Controllers\JobsViewController;
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
Route::post('/reset_password', [ResetPasswordController::class, 'reset_password']);
//user-dashboard
Route::get('/user-dashboard', [UserDashboardController::class, 'user_dashboard']);
Route::get('/content-user-dashboard', [UserDashboardController::class, 'content_user_dashboard']);
Route::get('/user-explorer', [UserExplorerController::class, 'user_explorer']);
Route::get('/user-explorer-month', [UserExplorerController::class, 'user_explorer_month']);
Route::get('/user-explorer-date', [UserExplorerController::class, 'user_explorer_date']);
Route::get('/user-explorer-file', [UserExplorerController::class, 'user_explorer_file']);
Route::post('/user-profile-setting', [UserSettingsController::class, 'user_profile_setting']);
Route::post('/user-image-upload', [UserImgUploadController::class, 'user_image_upload']);
Route::post('/upload_profile_picture', [UserImgUploadController::class, 'upload_profile_picture']);
Route::get('/seeder_profile_details', [UserDashboardController::class, 'seeder_profile_details']);

//Jobs
Route::get('/pending_job_view', [JobsViewController::class, 'pending_job_view']);
Route::get('/approved_job_view', [JobsViewController::class, 'approved_job_view']);
Route::get('/rejected_job_view', [JobsViewController::class, 'rejected_job_view']);

//content seeder api
Route::get('/approved_images', [ContentSeederController::class, 'approved_images']);
Route::get('/data_image', [ContentSeederController::class, 'data_image']);
Route::post('/data_entry_form_upload', [ContentSeederController::class, 'data_entry_form_upload']);

//locations
Route::post('/citys', [LocationController::class, 'get_citys']);
Route::post('/papers_autocomplete', [LocationController::class, 'papers_autocomplete']);
