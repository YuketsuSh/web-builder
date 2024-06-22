<?php

use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\Admin\NavItemController;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth', 'role:admin|moderator'])->group(function () {
    Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
    Route::resource('/admin/pages', PageController::class);
    Route::get('/admin/pages/{page:slug}', [PageController::class, 'show'])->name('pages.show');
});

Route::middleware(['auth', 'role:admin|moderator', 'check.rank'])->group(function () {
    Route::get('/admin/users', [UserController::class, 'index'])->name('admin.users.index');
    Route::get('/admin/users/{user}/edit', [UserController::class, 'edit'])->name('admin.users.edit');
    Route::put('/admin/users/{user}', [UserController::class, 'update'])->name('admin.users.update');
    Route::delete('/admin/users/{user}', [UserController::class, 'destroy'])->name('admin.users.destroy');
});

Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/admin/nav-items', [NavItemController::class, 'index'])->name('admin.nav-items.index');
    Route::get('/admin/nav-items/create', [NavItemController::class, 'create'])->name('admin.nav-items.create');
    Route::post('/admin/nav-items', [NavItemController::class, 'store'])->name('admin.nav-items.store');
    Route::get('/admin/nav-items/{navItem}/edit', [NavItemController::class, 'edit'])->name('admin.nav-items.edit');
    Route::put('/admin/nav-items/{navItem}', [NavItemController::class, 'update'])->name('admin.nav-items.update');
    Route::delete('/admin/nav-items/{navItem}', [NavItemController::class, 'destroy'])->name('admin.nav-items.destroy');
});

