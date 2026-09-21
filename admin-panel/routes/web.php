<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

Route::redirect('/', '/admin');
Route::post('/public/enquiries', [AdminController::class, 'storePublicEnquiry'])->name('public.enquiries.store');
Route::get('/public/content', [AdminController::class, 'publicContent'])->name('public.content');

Route::middleware('guest')->group(function () {
    Route::get('/login', [AdminController::class, 'login'])->name('login');
    Route::post('/login', [AdminController::class, 'authenticate'])->name('login.authenticate');
});

Route::middleware(['auth', 'admin'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/', [AdminController::class, 'dashboard'])->name('dashboard');
    Route::get('/enquiries', [AdminController::class, 'enquiries'])->name('enquiries.index');
    Route::get('/services', [AdminController::class, 'services'])->name('services.index');
    Route::get('/tools', [AdminController::class, 'tools'])->name('tools.index');
    Route::get('/settings', [AdminController::class, 'settings'])->name('settings.index');
    Route::post('/settings', [AdminController::class, 'updateSettings'])->name('settings.update');
    Route::patch('/enquiries/{enquiry}', [AdminController::class, 'updateEnquiry'])->name('enquiries.update');
    Route::delete('/enquiries/{enquiry}', [AdminController::class, 'destroyEnquiry'])->name('enquiries.destroy');
    Route::post('/services', [AdminController::class, 'storeService'])->name('services.store');
    Route::patch('/services/{service}', [AdminController::class, 'updateService'])->name('services.update');
    Route::patch('/services/{service}/toggle', [AdminController::class, 'toggleService'])->name('services.toggle');
    Route::delete('/services/{service}', [AdminController::class, 'destroyService'])->name('services.destroy');
    Route::post('/tools', [AdminController::class, 'storeTool'])->name('tools.store');
    Route::patch('/tools/{tool}', [AdminController::class, 'updateTool'])->name('tools.update');
    Route::patch('/tools/{tool}/toggle', [AdminController::class, 'toggleTool'])->name('tools.toggle');
    Route::delete('/tools/{tool}', [AdminController::class, 'destroyTool'])->name('tools.destroy');
    Route::post('/logout', [AdminController::class, 'logout'])->name('logout');
});
