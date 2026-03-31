<?php

use App\Http\Controllers\ContactsController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\Page\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [IndexController::class, 'index'])->name('home');
Route::get('/page/{slug}', [PageController::class, 'index'])->name('page');
Route::get('/contacts', [ContactsController::class, 'index'])->name('contacts');
