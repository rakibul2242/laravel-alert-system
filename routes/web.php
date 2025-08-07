<?php

use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;
use App\Livewire\SendMail;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('mailer', 'mailer-form')
    ->middleware(['auth'])
    ->name('mailer');

Route::view('queue-mail', 'queue-mail')
    ->middleware(['auth'])
    ->name('queue-mail');

Route::view('pusher', 'pusher')
    ->middleware(['auth'])
    ->name('pusher');

Route::middleware(['auth'])->group(function () {
    Route::redirect('settings', 'settings/profile');

    Volt::route('settings/profile', 'settings.profile')->name('settings.profile');
    Volt::route('settings/password', 'settings.password')->name('settings.password');
    Volt::route('settings/appearance', 'settings.appearance')->name('settings.appearance');
});

require __DIR__ . '/auth.php';
