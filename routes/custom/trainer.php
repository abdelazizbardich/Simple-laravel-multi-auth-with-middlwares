<?php


Route::get('/dashboard', [App\Http\Controllers\TrainerController::class,'getDashboard'])->name('trainer-dashboard');
