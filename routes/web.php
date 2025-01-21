<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\IdeaFormController;
use App\Models\Blog;
use App\Models\UserIdea;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/', [HomeController::class, 'showWelcomePage']);

Route::get('/UrbanService', [HomeController::class, 'serviceUrbanDetails'])->name('urban.services');
Route::get('/RuralService', [HomeController::class, 'serviceRuralDetails'])->name('rural.services');
Route::get('/RemoteService', [HomeController::class, 'serviceRemoteDetails'])->name('remote.services');
Route::get('/BlogService', [HomeController::class, 'BlogService'])->name('blog.services');
Route::get('/UploadIdea', [HomeController::class, 'UploadIdea'])->name('upload.services');


// Admin Route
Route::get('/dashboard', function () {
    $totalIdeas = UserIdea::count();

    $todaysIdeas = UserIdea::whereDate('created_at', Carbon::today())->count();

    $totalBlogs = Blog::count();

    return view('dashboard', compact('totalIdeas', 'todaysIdeas', 'totalBlogs'));
})->middleware('auth')->name('dashboard');


Route::post('/logout', function () {
    Auth::logout();
    return redirect('/');
})->name('logout');


// Login Route
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
// Login Route


Route::get('/a-about', [AdminController::class, 'showAdminPage']);

Route::post('/a-about', [AdminController::class, 'storeAbout'])->name('admin.storeAbout');

Route::get('/a-who', [AdminController::class, 'showWhoPage']);
Route::post('/a-who', [AdminController::class, 'storeWhoDetails'])->name('admin.storeWhoDetails');

Route::get('/a-urban', [AdminController::class, 'showUrbanPage']);
Route::post('/a-urban', [AdminController::class, 'storeUrbanService']);


Route::get('/a-rural', [AdminController::class, 'showRuralPage']);
Route::post('/a-rural', [AdminController::class, 'storeRuralService']);


Route::get('/a-upidea', [AdminController::class, 'showUpIdeaPage']);
Route::post('/a-upidea', [AdminController::class, 'storeUpIdea']);


Route::get('/a-remote', [AdminController::class, 'showRemotePage']);
// ISuue
Route::post('/a-remote', [AdminController::class, 'storeRemoteService']);
// ISuue

Route::get('/a-blog', [AdminController::class, 'showBlogPage']);
Route::post('/a-blog', [AdminController::class, 'storeBlog'])->name('store.blog');

Route::get('/a-network', [AdminController::class, 'showNetworkPage']);
Route::post('/a-network', [AdminController::class, 'storeNetwork']);


Route::get('/a-contact', [AdminController::class, 'showContactPage']);
Route::post('/a-contact', [AdminController::class, 'storeContact']);


Route::get('/a-idea', [IdeaFormController::class, 'showIdeaPage']);
// Admin Route



// Idea Form
Route::get('/idea-form', [IdeaFormController::class, 'showForm'])->name('ideaForm.show');
Route::post('/submit-idea', [IdeaFormController::class, 'submitForm'])->name('ideaForm.submit');

// Idea Form
