<?php

use App\Http\Controllers\AnnouncementController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/homepageAdmin', action: [ProfileController::class, 'viewHomepageAdmin'])->name('viewHomepageAdmin');

    Route::get('/registrationformLecturer', action: [RegisteredUserController::class, 'viewregistrationformLecturer'])->name('viewregistrationformLecturer');

    Route::get('/announcementForm', action: [AnnouncementController::class, 'viewAnnouncementForm'])->name('viewAnnouncementForm');
});


require __DIR__.'/auth.php';