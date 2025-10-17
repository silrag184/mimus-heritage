<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Website\WebsiteController;


//Website Routes
Route::get('/', [WebsiteController::class, 'index'])->name('home');
Route::get('about-us',[WebsiteController::class, 'aboutUs'])->name('about.us');
Route::get('contact-us',[WebsiteController::class, 'contactUs'])->name('contact.us');


Route::middleware([ 'auth:sanctum', config('jetstream.auth_session'), 'verified',])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');


});
