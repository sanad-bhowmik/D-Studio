<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});


Route::get('/UrbanService', [HomeController::class, 'serviceUrbanDetails'])->name('urban.services');
Route::get('/RuralService', [HomeController::class, 'serviceRuralDetails'])->name('rural.services');
Route::get('/RemoteService', [HomeController::class, 'serviceRemoteDetails'])->name('remote.services');
Route::get('/BlogService', [HomeController::class, 'BlogService'])->name('blog.services');
Route::get('/UploadIdea', [HomeController::class, 'UploadIdea'])->name('upload.services');
