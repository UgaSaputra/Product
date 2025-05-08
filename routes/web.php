<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use Livewire\Volt\Volt;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::middleware(['auth'])->group(function () {
    Route::redirect('settings', 'settings/profile');

    Volt::route('settings/profile', 'settings.profile')->name('settings.profile');
    Volt::route('settings/password', 'settings.password')->name('settings.password');
    Volt::route('settings/appearance', 'settings.appearance')->name('settings.appearance');
});

require __DIR__.'/auth.php';

Route::get('tasks', \App\Livewire\Tasks\Index::class)->name('tasks.index');
Route::get('tasks/create', \App\Livewire\Tasks\Create::class)->name('tasks.create');
Route::get('tasks/edit/{data}', \App\Livewire\Tasks\Edit::class)->name('tasks.edit');

Route::get('product', \App\Livewire\Product\Dashboard::class)->name('product.dash');

Route::get('form', [ProductController::class, 'index'])->name('form.index');