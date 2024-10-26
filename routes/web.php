<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdvertiserController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\PublisherController;
use App\Http\Controllers\PublicController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::middleware(['auth', 'isAdmin'])->group(function () {
    Route::get('/admin', [AdminController::class, 'index']);
});

Route::middleware(['auth', 'isAdvertiser'])->group(function () {
    Route::get('/advertiser', [AdvertiserController::class, 'index']);
});

Route::middleware(['auth', 'isPublisher'])->group(function () {
    Route::get('/publisher', [PublisherController::class, 'index']);
});


Route::get('/', [PublicController::class, 'home'])->name('home');
Route::get('/about', [PublicController::class, 'about'])->name('about');
Route::get('/services', [PublicController::class, 'services'])->name('services');



Route::middleware(['auth', 'isAdmin'])->prefix('admin')->group(function () {
    Route::get('/', [AdminController::class, 'index'])->name('admin.dashboard');
    Route::get('/users', [AdminController::class, 'users'])->name('admin.users');
    Route::get('/campaigns', [AdminController::class, 'campaigns'])->name('admin.campaigns');
    Route::get('/settings', [AdminController::class, 'settings'])->name('admin.settings');
});

Route::middleware(['auth', 'isAdvertiser'])->prefix('advertiser')->group(function () {
    Route::get('/', [AdvertiserController::class, 'index'])->name('advertiser.dashboard');
    Route::get('/campaigns', [AdvertiserController::class, 'campaigns'])->name('advertiser.campaigns');
    Route::get('/campaigns/create', [AdvertiserController::class, 'createCampaign'])->name('advertiser.campaigns.create');
    Route::post('/campaigns', [AdvertiserController::class, 'storeCampaign'])->name('advertiser.campaigns.store');
    Route::get('/analytics', [AdvertiserController::class, 'analytics'])->name('advertiser.analytics');
});


Route::middleware(['auth', 'isPublisher'])->prefix('publisher')->group(function () {
    Route::get('/', [PublisherController::class, 'index'])->name('publisher.dashboard');
    Route::get('/ad-units', [PublisherController::class, 'adUnits'])->name('publisher.ad_units');
    Route::get('/ad-units/create', [PublisherController::class, 'createAdUnit'])->name('publisher.ad_units.create');
    Route::post('/ad-units', [PublisherController::class, 'storeAdUnit'])->name('publisher.ad_units.store');
    Route::get('/analytics', [PublisherController::class, 'analytics'])->name('publisher.analytics');
    Route::get('/revenue', [PublisherController::class, 'revenue'])->name('publisher.revenue');
});

Route::get('lang/{locale}', [LanguageController::class, 'switchLanguage'])->name('lang.switch');
Route::get('/locale/{locale}', function ($locale) {
    return redirect()->back(); // Redirect back to the previous page
})->name('locale.set');

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard12', [PublisherController::class, 'index'])->name('user.channels.create');
    Route::get('/dashboard3', [PublisherController::class, 'index'])->name('ads.index');
    Route::get('/dashboard5', [PublisherController::class, 'index'])->name('profile.show');
    Route::get('/dashboard6', [PublisherController::class, 'index'])->name('settings');
    Route::get('/dashboard7', [PublisherController::class, 'index'])->name('settings.defaults');
    Route::get('/dashboard8', [PublisherController::class, 'index'])->name('settings.index');

    // Group for user-specific news routes
    Route::prefix('user')->as('user.')->group(function() {
        Route::get('dashboard', [PublisherController::class, 'index'])->name('dashboard');

        Route::prefix('news')->as('news.')->group(function () {
            Route::get('/', [PublisherController::class, 'index'])->name('index');
            Route::get('create', [PublisherController::class, 'create'])->name('create');
            Route::post('/', [PublisherController::class, 'store'])->name('store');
            Route::get('{news}', [PublisherController::class, 'show'])->name('show');
            Route::get('{news}/edit', [PublisherController::class, 'edit'])->name('edit');
            Route::put('{news}', [PublisherController::class, 'update'])->name('update');
            Route::delete('{news}', [PublisherController::class, 'destroy'])->name('destroy');
            Route::post('upload-image', [PublisherController::class, 'uploadImage'])->name('upload-image');
        });

        Route::prefix('channels')->as('channels.')->group(function () {
            Route::get('/', [PublisherController::class, 'index'])->name('index');
            Route::get('create', [PublisherController::class, 'create'])->name('create');
            Route::post('/', [PublisherController::class, 'store'])->name('store');
            Route::get('{channel}', [PublisherController::class, 'show'])->name('show');
            Route::get('{channel}/edit', [PublisherController::class, 'edit'])->name('edit');
            Route::put('{channel}', [PublisherController::class, 'update'])->name('update');
            Route::delete('{channel}', [PublisherController::class, 'destroy'])->name('destroy');
            Route::post('upload-image', [PublisherController::class, 'uploadImage'])->name('upload-image');
        });
        Route::resource('ads', PublisherController::class);
        Route::resource('api-keys', PublisherController::class);

        Route::get('/default-settings/index', [PublisherController::class, 'edit'])->name('default-settings.index');
        Route::put('/default-settings', [PublisherController::class, 'update'])->name('default-settings.update');
   
        Route::get('/profile', [PublisherController::class, 'profile'])->name('profile');
        Route::put('/profile', [PublisherController::class, 'updateProfile'])->name('profile.update');
        Route::get('/documentations/webhooks/news', [PublisherController::class, 'webhookNews'])->name('documentations.webhooks.news');

    });
    
});
