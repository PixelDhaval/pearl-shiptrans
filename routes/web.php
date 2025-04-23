<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DemosController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\InsuranceController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ContactController;

Route::controller(DemosController::class)->group(function () {
    Route::get('/', 'index6')->name('index');
});

Route::prefix('/services')->group(function () {
    Route::controller(ServiceController::class)->group(function () {
        Route::get('/stevedoring', 'stevedoring')->name('stevedoring');
        Route::get('/vessel-agency', 'vesselAgency')->name('vesselAgency');
        Route::get('/chartering', 'chartering')->name('chartering');
        Route::get('/custom-clearance', 'customClearance')->name('customClearance');
        Route::get('/warehousing-storage', 'warehousingStorage')->name('warehousingStorage');
        Route::get('/rail-haulage', 'railHaulage')->name('railHaulage');
        Route::get('/road-haulage', 'roadHaulage')->name('roadHaulage');
        Route::get('/freight-forwarding', 'freightForwarding')->name('freightForwarding');
        Route::get('/cfs', 'cfs')->name('cfs');
        Route::get('/cranes-and-forklifts', 'cranesAndForklifts')->name('cranesAndForklifts');
        Route::get('over-dimension-cargo-handling', 'odc')->name('odc');
        Route::get('bonded-warehouse-services', 'bondedWarehouse')->name('bondedWarehouse');
    });
});
// news


Route::controller(PagesController::class)->group(function () {
    Route::get('/404', 'errorPage')->name('errorPage');
    Route::get('/about', 'about')->name('about');
    Route::get('/faq', 'faq')->name('faq');
});

// pages
Route::controller(ShopController::class)->group(function () {
    Route::get('/contact', 'contact')->name('contact');
});
Route::post('/contact', [ContactController::class, 'submit'])->name('contact.send');
