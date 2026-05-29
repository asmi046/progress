<?php

use App\Http\Controllers\ContactsController;
use App\Http\Controllers\EmissionDocumentController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\NewsEventController;
use App\Http\Controllers\Page\PageController;
use App\Http\Controllers\ProductServiceController;
use App\Http\Controllers\ProjectController;
use Illuminate\Support\Facades\Route;

Route::get('/', [IndexController::class, 'index'])->name('home');
Route::get('/page/{slug}', [PageController::class, 'index'])->name('page');
Route::get('/contacts', [ContactsController::class, 'index'])->name('contacts');

Route::get('/emission-documents', [EmissionDocumentController::class, 'index'])->name('emission-documents.index');

Route::get('/projects', [ProjectController::class, 'index'])->name('projects.index');
Route::get('/projects/{slug}', [ProjectController::class, 'show'])->name('projects.show');

Route::get('/news-events', [NewsEventController::class, 'index'])->name('news-events.index');
Route::get('/news-events/{slug}', [NewsEventController::class, 'show'])->name('news-events.show');

Route::get('/product-services', [ProductServiceController::class, 'index'])->name('product-services.index');
Route::get('/product-services/{slug}', [ProductServiceController::class, 'show'])->name('product-services.show');
