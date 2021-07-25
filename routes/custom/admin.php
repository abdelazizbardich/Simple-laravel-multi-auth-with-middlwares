<?php

Route::get('/dashboard', [App\Http\Controllers\AdminController::class,'getDashboard'])->name('admin-dashboard');
