<?php

use App\Http\Controllers\Admin\FileController;
use UniSharp\LaravelFilemanager\Lfm;
use App\Http\Controllers\Backend\HomeController;
use App\Http\Controllers\Backend\NoticeController;
use App\Http\Controllers\Backend\GalleryController;
use App\Http\Controllers\Backend\TeacherController;
use App\Http\Controllers\Backend\Auth\LoginController;
use App\Http\Controllers\Backend\ManagementController;
use App\Http\Controllers\Backend\ServiceController;
use App\Http\Controllers\Backend\TechnologyController;

Route::group(['as' => 'admin.','middleware'=>['auth:admin']],function(){
    Route::get('/', [HomeController::class,'index'])->name('home');
    // Route::get('/', [HomeController::class,'index'])->name('home');
    Route::resource('notice', NoticeController::class);
    Route::resource('management', ManagementController::class);
    Route::resource('technology', TechnologyController::class);
    Route::resource('teacher', TeacherController::class);
    Route::resource('service', ServiceController::class);
    Route::resource('gallery', GalleryController::class);
    Route::get('files', [FileController::class,"index"])->name("files");

 
});
   Route::group(['prefix' => 'filemanager',"middleware"=>['auth:admin']], function () {
        \UniSharp\LaravelFilemanager\Lfm::routes();
    });

Route::group(['as' => 'admin.'], function() {

    // Login
    Route::get('login', [LoginController::class,'showLoginForm'])->name('login');
    Route::post('login', [LoginController::class,'login']);
    Route::post('logout', [LoginController::class,'logout'])->name('logout');

    // Register
    // Route::get('register', [RegisterController::class,'showRegistrationForm'])->name('register');
    // Route::post('register', [RegisterController::class,'register']);

    // Passwords
    // Route::post('password/email', [ForgotPasswordController::class,'sendResetLinkEmail'])->name('password.email');
    // Route::post('password/reset', [ResetPasswordController::class,'reset']);
    // Route::get('password/reset', [ForgotPasswordController::class,'showLinkRequestForm'])->name('password.request');
    // Route::get('password/reset/{token}', [ResetPasswordController::class,'showResetForm'])->name('password.reset');

    // Must verify email
    // Route::get('email/resend',[VerificationController::class,'resend'])->name('verification.resend');
    // Route::get('email/verify',[VerificationController::class,'show'])->name('verification.notice');
    // Route::get('email/verify/{id}/{hash}',[VerificationController::class,'verify'])->name('verification.verify');


});