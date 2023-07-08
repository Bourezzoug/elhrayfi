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
Route::post('/',[HomeController::class,'store'])->name('email.store');
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
// Route::middleware([
//     'auth:sanctum',
//     config('jetstream.auth_session'),
//     'verified'
// ])->group(function () {
//     Route::get('/dashboard', function () {
//         return view('dashboard');
//     })->name('dashboard');
// });


// Route for customers
Route::middleware(['auth:sanctum', 'verified','authclient'])->group(function () {
    // Route::get('/dashboard',function() {
    //     return view('Client.clientDashboard');
    // })->name('client.dashboard');
    Route::get('/offre',\App\Http\Livewire\Client\Offre\OffreIndex::class)->name('offre.index');
    Route::get('/offre/create',\App\Http\Livewire\Client\Offre\OffreCreate::class)->name('offre.create');
    Route::get('/client/dashboard', function () {
        return view('Client.dashboard');
    })->name('Client.dashboard');
});
// Route for Admin
Route::middleware(['auth:sanctum', 'verified','authadmin'])->group(function () {
    Route::get('/admin/dashboard', function () {
        return view('admin.dashboard');
    })->name('dashboard');
    Route::get('/admin/blog',\App\Http\Livewire\Admin\Blog\BlogIndex::class)->name('blog.index');
    Route::get('/admin/blog/create',\App\Http\Livewire\Admin\Blog\BlogCreate::class)->name('blog.create');
    Route::get('/admin/inscrit',\App\Http\Livewire\Admin\Inscrit\InscritIndex::class)->name('inscrit.index');
});;