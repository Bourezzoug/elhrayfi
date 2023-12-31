<?php

use App\Http\Controllers\ArtisanController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\JobDetailController;
use App\Http\Controllers\JoblistController;
use App\Http\Controllers\OfferController;
use App\Http\Controllers\PaypalController;
use App\Http\Controllers\StripeController;
use App\Http\Controllers\VerifyController;
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
Route::get('/blog',[BlogController::class,'index'])->name('blogPage.index');
Route::get('/joblist',[JoblistController::class,'display'])->name('joblist.index');
Route::get('/artisans-listes',[ArtisanController::class,'index'])->name('artisans.index');

// Test
// Route::get('/company',[ArtisanController::class,'index'])->name('company.index');
// Route::get('/company',function() {
//     return view('pages.company');
// });




Route::get('/about',function() {
    return view('pages.about');
})->name('about.index');
Route::get('/contact',[ContactController::class,'index'])->name('contact.index');
Route::post('/contact', [ContactController::class, 'sendEmail'])->name('contact.sendEmail');
Route::get('/404',function() {
    return view('pages.error');
});
// Route::get('/blog/{id}',function() {
//     return view('pages.post');
// });
Route::get('/jobdetail',function() {
    return view('pages.jobdetail');
});
// Route::get('/postjob',function() {
//     return view('pages.postjob');
// });

// Route for customers
Route::middleware(['auth:sanctum', 'verifyEmail','authclient'])->group(function () {
    Route::get('/client/dashboard', function () {
        return view('client.dashboard');
    })->name('client.dashboard');
    // Route::get('/dashboard',function() {
    //     return view('Client.clientDashboard');
    // })->name('client.dashboard');
    Route::get('/offre',\App\Http\Livewire\Client\Offre\OffreIndex::class)->name('offre.index');
    Route::get('/offre/create',\App\Http\Livewire\Client\Offre\OffreCreate::class)->name('offre.create');
    Route::get('/offre/update/{id}',\App\Http\Livewire\Client\Offre\OffreUpdate::class)->name('offre.update');
    Route::get('/client/profile',\App\Http\Livewire\Client\Profile\ProfileIndex::class)->name('client.profile');
    Route::get('/client/messages',\App\Http\Livewire\Client\Message\MessagdeIndex::class)->name('client.message');
    Route::post('/contact-artisan',[OfferController::class,'contactArtisan'])->name('contact.artisan');

});


// Route for Artisan
Route::middleware(['auth:sanctum', 'verifyEmail','authartisan'])->group(function () {
    Route::get('/artisan/dashboard', function () {
        return view('artisan.dashboard');
    })->name('artisan.dashboard');
    Route::get('/listes-offres',[JoblistController::class,'index'])->name('liste.offre');
    Route::get('/offre/{id}',[OfferController::class,'index'])->name('job.detail');
    Route::post('/contact-client',[OfferController::class,'contact'])->name('contact.client');
    Route::get('/artisan/profile',\App\Http\Livewire\Artisan\Profile\ProfileIndex::class)->name('artisan.profile');
    Route::get('/artisan/experiences',\App\Http\Livewire\Artisan\Experience\ExperienceIndex::class)->name('experience.index');
    Route::get('/artisan/experiences/create',\App\Http\Livewire\Artisan\Experience\ExperienceCreate::class)->name('experience.create');
    Route::get('/artisan/educations',\App\Http\Livewire\Artisan\Education\EducationIndex::class)->name('education.index');
    Route::get('/artisan/educations/create',\App\Http\Livewire\Artisan\Education\EducationCreate::class)->name('education.create');
    Route::get('/artisan/messages',\App\Http\Livewire\Artisan\Message\MessageIndex::class)->name('message.index');
    Route::get('/artisan/payments',\App\Http\Livewire\Artisan\Payment\PaymentIndex::class)->name('payment.index');
    Route::post('paypal/payment',[PaypalController::class,'payment'])->name('paypal');
    Route::get('paypal/success',[PaypalController::class,'success'])->name('paypal_success');
    Route::get('paypal/cancel',[PaypalController::class,'cancel'])->name('paypal_cancel');
    Route::post('stripe/payment',[StripeController::class,'payment'])->name('stripe');
    Route::get('stripe/success',[StripeController::class,'success'])->name('stripe_success');
    Route::get('stripe/cancel',[StripeController::class,'cancel'])->name('stripe_cancel');
});

// Route for artisan and clients

Route::middleware(['auth:sanctum'])->group(function () {
    Route::get('/verification_code/{verification_code}', [VerifyController::class , 'verification_code'])->name('verification_code');
});

// Route for Admin
Route::middleware(['auth:sanctum','authadmin'])->group(function () {
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

Route::get('/blog/{slug}',[BlogController::class,'show'])->name('blog.post');
