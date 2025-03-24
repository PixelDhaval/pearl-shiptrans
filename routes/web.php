<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DemosController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\InsuranceController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ServiceController;

Route::controller(DemosController::class)->group(function () {
    Route::get('/', 'index6')->name('index');
});

Route::controller(DemosController::class)->group(function () {
    Route::get('/index-one-page', 'indexOnePage')->name('indexOnePage');
    Route::get('/index2-one-page', 'index2OnePage')->name('index2OnePage');
    Route::get('/index2', 'index2')->name('index2');
    Route::get('/index3-one-page', 'index3OnePage')->name('index3OnePage');
    Route::get('/index3', 'index3')->name('index3');
    Route::get('/index4-one-page', 'index4OnePage')->name('index4OnePage');
    Route::get('/index4', 'index4')->name('index4');
    Route::get('/index5-one-page', 'index5OnePage')->name('index5OnePage');
    Route::get('/index5', 'index5')->name('index5');
    Route::get('/index6-one-page', 'index6OnePage')->name('index6OnePage');
    Route::get('/index6', 'index6')->name('index6');
    Route::get('/index7-one-page', 'index7OnePage')->name('index7OnePage');
    Route::get('/index7', 'index7')->name('index7');
    Route::get('/index-rtl', 'indexRtl')->name('indexRtl');
    Route::get('/index-dark', 'indexDark')->name('indexDark');
    Route::get('/index-boxed', 'indexBoxed')->name('indexBoxed');
});

// Insurance
Route::prefix('Insurance')->group(function () {
    Route::controller(InsuranceController::class)->group(function () {
        Route::get('/business-insurance', 'businessInsurance')->name('businessInsurance');
        Route::get('/car-insurance', 'carInsurance')->name('carInsurance');
        Route::get('/fire-insurance', 'fireInsurance')->name('fireInsurance');
        Route::get('/health-insurance', 'healthInsurance')->name('healthInsurance');
        Route::get('/home-insurance', 'homeInsurance')->name('homeInsurance');
        Route::get('/insurance-01', 'insurance01')->name('insurance01');
        Route::get('/insurance-02', 'insurance02')->name('insurance02');
        Route::get('/insurance-03', 'insurance03')->name('insurance03');
        Route::get('/life-insurance', 'lifeInsurance')->name('lifeInsurance');
        Route::get('/marriage-insurance', 'marriageInsurance')->name('marriageInsurance');
        Route::get('/travel-insurance', 'travelInsurance')->name('travelInsurance');
    });
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
    });
});
// news
Route::prefix('news')->group(function () {
    Route::controller(NewsController::class)->group(function () {
        Route::get('/news-carousel', 'newsCarousel')->name('newsCarousel');
        Route::get('/news-details', 'newsDetails')->name('newsDetails');
        Route::get('/news-sidebar-left', 'newsSidebarLeft')->name('newsSidebarLeft');
        Route::get('/news-sidebar', 'newsSidebar')->name('newsSidebar');
        Route::get('/news', 'news')->name('news');
    });
});

Route::controller(PagesController::class)->group(function () {
    Route::get('/404', 'errorPage')->name('errorPage');
    Route::get('/about', 'about')->name('about');
    Route::get('/faq', 'faq')->name('faq');
    Route::get('/policy-proposal', 'policyProposal')->name('policyProposal');
    Route::get('/portfolio-carousel', 'portfolioCarousel')->name('portfolioCarousel');
    Route::get('/portfolio-details', 'portfolioDetails')->name('portfolioDetails');
    Route::get('/portfolio', 'portfolio')->name('portfolio');
    Route::get('/pricing', 'pricing')->name('pricing');
    Route::get('/sign-in', 'signIn')->name('signIn');
    Route::get('/team-carousel', 'teamCarousel')->name('teamCarousel');
    Route::get('/team-details', 'teamDetails')->name('teamDetails');
    Route::get('/team-page', 'teamPage')->name('teamPage');
    Route::get('/testimonial', 'testimonial')->name('testimonial');
    Route::get('/testimonial-carousel', 'testimonialCarousel')->name('testimonialCarousel');
    Route::get('/make-a-claim-group', 'makeaClaimGroup')->name('makeaClaimGroup');
    Route::get('/make-a-claim-loan', 'makeaClaimLoan')->name('makeaClaimLoan');
    Route::get('/make-a-claim-maturity', 'makeaClaimMaturity')->name('makeaClaimMaturity');
    Route::get('/make-a-claim-other', 'makeaClaimOther')->name('makeaClaimOther');
    Route::get('/make-a-claim-death', 'makeaClaimDeath')->name('makeaClaimDeath');
});

// pages
Route::controller(ShopController::class)->group(function () {
    Route::get('/cart', 'cart')->name('cart');
    Route::get('/checkout', 'checkout')->name('checkout');
    Route::get('/product-details', 'productDetails')->name('productDetails');
    Route::get('/products', 'products')->name('products');
    Route::get('/contact', 'contact')->name('contact');
});
