<?php

use App\Http\Controllers\ArtisanController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\JobDetailController;
use App\Http\Controllers\JoblistController;
use App\Http\Controllers\OfferController;
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
// Route::post('/search-artisan',[HomeController::class,'searchArtisan'])->name('search.artisan');
Route::post('/',[HomeController::class,'store'])->name('email.store');
Route::get('/blog',[BlogController::class,'index'])->name('blog.index');
Route::get('/joblist',[JoblistController::class,'index'])->name('joblist.index');
Route::get('/artisans-listes',[ArtisanController::class,'index'])->name('artisans.index');

// Test
// Route::get('/company',[ArtisanController::class,'index'])->name('company.index');
// Route::get('/company',function() {
//     return view('pages.company');
// });




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
// Route::get('/postjob',function() {
//     return view('pages.postjob');
// });


// Route for customers
Route::middleware(['auth:sanctum', 'verified','authclient'])->group(function () {
    Route::get('/client/dashboard', function () {
        return view('Client.dashboard');
    })->name('Client.dashboard');
    // Route::get('/dashboard',function() {
    //     return view('Client.clientDashboard');
    // })->name('client.dashboard');
    Route::get('/offre',\App\Http\Livewire\Client\Offre\OffreIndex::class)->name('offre.index');
    Route::get('/offre/create',\App\Http\Livewire\Client\Offre\OffreCreate::class)->name('offre.create');
    Route::get('/client/profile',\App\Http\Livewire\Client\Profile\ProfileIndex::class)->name('client.profile');


});


// Route for Artisan
Route::middleware(['auth:sanctum', 'verified','authartisan'])->group(function () {
    Route::get('/artisan/dashboard', function () {
        return view('artisan.dashboard');
    })->name('artisan.dashboard');
    Route::get('/listes-offres',[JoblistController::class,'index'])->name('liste.offre');
    Route::get('/offre/{id}',[OfferController::class,'index'])->name('job.detail');
    Route::get('/artisan/profile',\App\Http\Livewire\Artisan\Profile\ProfileIndex::class)->name('artisan.profile');
    Route::get('/artisan/experiences',\App\Http\Livewire\Artisan\Experience\ExperienceIndex::class)->name('experience.index');
    Route::get('/artisan/experiences/create',\App\Http\Livewire\Artisan\Experience\ExperienceCreate::class)->name('experience.create');
    Route::get('/artisan/educations',\App\Http\Livewire\Artisan\Education\EducationIndex::class)->name('education.index');
    Route::get('/artisan/educations/create',\App\Http\Livewire\Artisan\Education\EducationCreate::class)->name('education.create');

});
// Route for Admin
Route::middleware(['auth:sanctum', 'verified','authadmin'])->group(function () {
    Route::get('/admin/dashboard', function () {
        return view('admin.dashboard');
    })->name('dashboard');
    Route::get('/admin/blog',\App\Http\Livewire\Admin\Blog\BlogIndex::class)->name('blog.index');
    Route::get('/admin/blog/create',\App\Http\Livewire\Admin\Blog\BlogCreate::class)->name('blog.create');
    Route::get('/admin/inscrit',\App\Http\Livewire\Admin\Inscrit\InscritIndex::class)->name('inscrit.index');
    Route::get('/admin/clients',\App\Http\Livewire\Admin\Client\ClientIndex::class)->name('clients.index');
    Route::get('/admin/artisans',\App\Http\Livewire\Admin\Artisan\ArtisanIndex::class)->name('artisans.index');
});;
Route::get('/sss',function() {
    return view('tester');
});
Route::get('/artisan/{name}',[ArtisanController::class,'show'])->name('resume.index');
Route::get('/artisans-liste',[ArtisanController::class,'display'])->name('artisan.liste');


Route::get('/company/{name}',[CompanyController::class,'index']);

// Route::get('/offre/{id}',[OfferController::class,'index']);