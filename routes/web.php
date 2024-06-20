<?php
use App\Livewire\Webtoons;
use App\Livewire\Episodes;
use App\Livewire\Pages;
use App\Livewire\Favorites;
use App\Livewire\ReadingHistories;
use App\Livewire\Users;

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::get('/webtoons', Webtoons::class, function () {
        return view('webtoon');
    })->name('webtoons');
    Route::get('/episodes', Episodes::class, function () {
        return view('episode');
    })->name('episodes');
    Route::get('/pages', Pages::class, function () {
        return view('pages');
    })->name('pages');
    Route::get('/users', Users::class, function () {
        return view('users');
    })->name('users');
    Route::get('/favorites', Favorites::class, function () {
        return view('favorites');
    })->name('favorites');
    Route::get('/reading_histories', ReadingHistories::class, function () {
        return view('reading_histories');
    })->name('reading_histories');
});
