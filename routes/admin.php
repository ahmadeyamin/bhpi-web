<?php

use App\Http\Controllers\Backend\HomeController;
use App\Http\Controllers\Backend\NoticeController;
use App\Http\Controllers\Backend\Auth\LoginController;


Route::group(['as' => 'admin.','middleware'=>['auth:admin']],function(){
    Route::get('/', [HomeController::class,'index'])->name('home');
    // Route::get('/', [HomeController::class,'index'])->name('home');
    Route::resource('notice', NoticeController::class);
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