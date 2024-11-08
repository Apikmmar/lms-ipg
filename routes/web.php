<?php

use App\Http\Controllers\AnnouncementController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/homepage', function () {
    return view('ManageUser.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
   
    Route::get('/registrationformLecturer', action: [RegisteredUserController::class, 'viewregistrationformLecturer'])->name('viewregistrationformLecturer');
    Route::get('/registrationformStudent', action: [RegisteredUserController::class, 'viewregistrationformStudent'])->name('viewregistrationformStudent');
    Route::get('/registrationformSubject', action: [RegisteredUserController::class, 'viewregistrationformSubject'])->name('viewregistrationformSubject');

    Route::get(uri: '/announcementForm', action: [AnnouncementController::class, 'viewAnnouncementForm'])->name('viewAnnouncementForm');
    Route::get(uri: '/announcementApproval', action: [AnnouncementController::class, 'viewAnnouncementApproval'])->name('viewAnnouncementApproval');

});


require __DIR__.'/auth.php';