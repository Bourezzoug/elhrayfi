<?php

use App\Http\Controllers\ArtisanController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\JoblistController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('pages.homepage');
});
Route::get('/',[HomeController::class,'index']);
Route::get('/blog',[BlogController::class,'index'])->name('blog.index');
Route::get('/joblist',[JoblistController::class,'index'])->name('joblist.index');
Route::get('/artisans',[ArtisanController::class,'index'])->name('artisans.index');
Route::get('/cv',function() {
    return view('pages.resume');
})->name('resume.index');
Route::get('/about',function() {
    return view('pages.about');
})->name('about.index');
Route::get('/contact',function() {
    return view('pages.contact');
})->name('contact.index');
Route::get('/404',function() {
    return view('pages.error');
});
Route::get('/blog/{id}',function() {
    return view('pages.post');
});
Route::get('/jobdetail',function() {
    return view('pages.jobdetail');
});
Route::get('/postjob',function() {
    return view('pages.postjob');
});