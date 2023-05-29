<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\back\AdminController;
use App\Http\Controllers\back\SettingsController;
use App\Http\Controllers\back\AboutUsController;
use App\Http\Controllers\back\PartnersController;
use App\Http\Controllers\back\PolicyController;
use App\Http\Controllers\back\TermsController;
use App\Http\Controllers\back\HomeSliderController;
use App\Http\Controllers\back\AboutUsSliderController;
use App\Http\Controllers\back\LogsController;
use App\Http\Controllers\back\UserController;
use App\Http\Controllers\back\BookController;
use App\Http\Controllers\back\ForLaseController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\front\HomeController;
use App\Http\Controllers\front\LoginController as FrontLoginController;
use Illuminate\Support\Facades\Auth;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::group(['prefix' => LaravelLocalization::setLocale(), 'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']], function () {

    Auth::routes();
    Route::get('/log-in', [FrontLoginController::class, 'login'])->name('front.login');
    Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

    Route::group(['prefix' => 'backend', 'as' => 'backend.', 'middleware' => ['auth', 'checkTypeUser']], function () {
        Route::get('/', [AdminController::class, 'index'])->name('index');

        Route::group(['prefix' => 'settings', 'as' => 'settings.'], function () {
            Route::get('/', [SettingsController::class, 'settings']);
            Route::post('/update-logo', [SettingsController::class, 'updateLogo'])->name('update.logo');
            Route::post('/update-name-en', [SettingsController::class, 'updateNameEnglish'])->name('update.nameen');
            Route::post('/update-name-ar', [SettingsController::class, 'updateNameArabic'])->name('update.namear');
            Route::post('/meta-title-en', [SettingsController::class, 'updateMetaTitleEnglish'])->name('update.metatitleen');
            Route::post('/meta-title-ar', [SettingsController::class, 'updateMetaTitleArabic'])->name('update.metatitlear');
            Route::post('/meta-keywords-en', [SettingsController::class, 'updateMetaKeywordsEnglish'])->name('update.metakeywordsen');
            Route::post('/meta-keywords-ar', [SettingsController::class, 'updateMetaKeywordsArabic'])->name('update.metakeywordsar');
            Route::post('/meta-description-en', [SettingsController::class, 'updateMetaDescriptionEnglish'])->name('update.metadescriptionen');
            Route::post('/meta-description-ar', [SettingsController::class, 'updateMetaDescriptionArabic'])->name('update.metadescriptionar');
            Route::post('/facebook-link', [SettingsController::class, 'updateFacebookLink'])->name('update.facebooklink');
            Route::post('/twitter-link', [SettingsController::class, 'updateTwitterLink'])->name('update.twitterlink');
            Route::post('/linkedin-link', [SettingsController::class, 'updateLinkedinLink'])->name('update.linkedinlink');
            Route::post('/instagram-link', [SettingsController::class, 'updateInstagramLink'])->name('update.instagramlink');
            Route::post('/snapchat-link', [SettingsController::class, 'updateSnapchatLink'])->name('update.snapchatlink');
            Route::post('/tiktok-link', [SettingsController::class, 'updateTiktokLink'])->name('update.tiktoklink');
            Route::post('/email', [SettingsController::class, 'updateEmail'])->name('update.email');
            Route::post('/phone', [SettingsController::class, 'updatePhone'])->name('update.phone');
            Route::post('/fax', [SettingsController::class, 'updateFax'])->name('update.fax');
            Route::post('/update-address-en', [SettingsController::class, 'updateAddressEnglish'])->name('update.addressen');
            Route::post('/update-address-ar', [SettingsController::class, 'updateAddressArabic'])->name('update.addressar');
            Route::post('/update-map-iframe', [SettingsController::class, 'updateMapIframe'])->name('update.mapiframe');
        });

        Route::group(['prefix' => 'about-us', 'as' => 'aboutus.'], function () {
            Route::get('/', [AboutUsController::class, 'aboutus']);
            Route::post('/update-our-history-en', [AboutUsController::class, 'update_our_history_en'])->name('update.ourhistoryen');
            Route::post('/update-our-history-ar', [AboutUsController::class, 'update_our_history_ar'])->name('update.ourhistoryar');
            Route::post('/update-our-company-en', [AboutUsController::class, 'update_our_company_en'])->name('update.ourcompanyen');
            Route::post('/update-our-company-ar', [AboutUsController::class, 'update_our_company_ar'])->name('update.ourcompanyar');
            Route::post('/update-meta-title-en', [AboutUsController::class, 'update_meta_title_en'])->name('update.metatitleen');
            Route::post('/update-meta-title-ar', [AboutUsController::class, 'update_meta_title_ar'])->name('update.metatitlear');
            Route::post('/update-meta-keywords-en', [AboutUsController::class, 'update_meta_keywords_en'])->name('update.metakeywordsen');
            Route::post('/update-meta-keywords-ar', [AboutUsController::class, 'update_meta_keywords_ar'])->name('update.metakeywordsar');
            Route::post('/update-meta-description-en', [AboutUsController::class, 'update_meta_description_en'])->name('update.metadescriptionen');
            Route::post('/update-meta-description-ar', [AboutUsController::class, 'update_meta_description_ar'])->name('update.metadescriptionar');
        });

        Route::group(['prefix' => 'partners', 'as' => 'partners.'], function () {
            Route::get('/', [PartnersController::class, 'partners']);
            Route::post('/store', [PartnersController::class, 'store'])->name('store');
            Route::post('/update', [PartnersController::class, 'update'])->name('update');
            Route::post('/destroy', [PartnersController::class, 'destroy'])->name('destroy');
        });

        Route::group(['prefix' => 'policy', 'as' => 'policy.'], function () {
            Route::get('/', [PolicyController::class, 'policy']);
            Route::post('/update-our-policies-en', [PolicyController::class, 'update_our_policies_en'])->name('update.ourpoliciesen');
            Route::post('/update-our-policies-ar', [PolicyController::class, 'update_our_policies_ar'])->name('update.ourpoliciesar');
            Route::post('/update-meta-title-en', [PolicyController::class, 'update_meta_title_en'])->name('update.metatitleen');
            Route::post('/update-meta-title-ar', [PolicyController::class, 'update_meta_title_ar'])->name('update.metatitlear');
            Route::post('/update-meta-keywords-en', [PolicyController::class, 'update_meta_keywords_en'])->name('update.metakeywordsen');
            Route::post('/update-meta-keywords-ar', [PolicyController::class, 'update_meta_keywords_ar'])->name('update.metakeywordsar');
            Route::post('/update-meta-description-en', [PolicyController::class, 'update_meta_description_en'])->name('update.metadescriptionen');
            Route::post('/update-meta-description-ar', [PolicyController::class, 'update_meta_description_ar'])->name('update.metadescriptionar');
        });

        Route::group(['prefix' => 'terms', 'as' => 'terms.'], function () {
            Route::get('/', [TermsController::class, 'terms']);
            Route::post('/update-our-terms-en', [TermsController::class, 'update_our_terms_en'])->name('update.ourtermsen');
            Route::post('/update-our-terms-ar', [TermsController::class, 'update_our_terms_ar'])->name('update.ourtermsar');
            Route::post('/update-meta-title-en', [TermsController::class, 'update_meta_title_en'])->name('update.metatitleen');
            Route::post('/update-meta-title-ar', [TermsController::class, 'update_meta_title_ar'])->name('update.metatitlear');
            Route::post('/update-meta-keywords-en', [TermsController::class, 'update_meta_keywords_en'])->name('update.metakeywordsen');
            Route::post('/update-meta-keywords-ar', [TermsController::class, 'update_meta_keywords_ar'])->name('update.metakeywordsar');
            Route::post('/update-meta-description-en', [TermsController::class, 'update_meta_description_en'])->name('update.metadescriptionen');
            Route::post('/update-meta-description-ar', [TermsController::class, 'update_meta_description_ar'])->name('update.metadescriptionar');
        });

        Route::group(['prefix' => 'home-slider', 'as' => 'homeslider.'], function () {
            Route::get('/', [HomeSliderController::class, 'HomeSlider']);
            Route::post('/store', [HomeSliderController::class, 'store'])->name('store');
            Route::post('/destroy', [HomeSliderController::class, 'destroy'])->name('destroy');
        });

        Route::group(['prefix' => 'about-us-slider', 'as' => 'aboutusslider.'], function () {
            Route::get('/', [AboutUsSliderController::class, 'aboutUsSlider']);
            Route::post('/store', [AboutUsSliderController::class, 'store'])->name('store');
            Route::post('/destroy', [AboutUsSliderController::class, 'destroy'])->name('destroy');
        });

        Route::group(['prefix' => 'logs', 'as' => 'logs.'], function () {
            Route::get('/', [LogsController::class, 'logs']);
        });

        Route::group(['prefix' => 'users', 'as' => 'users.'], function () {
            Route::get('/', [UserController::class, 'users']);
            Route::post('/store', [UserController::class, 'store'])->name('store');
            Route::get('/edit/{id}', [UserController::class, 'edit'])->name('edit');
            Route::post('/destroy', [UserController::class, 'destroy'])->name('destroy');
            Route::post('/update', [UserController::class, 'update'])->name('update');
            Route::post('/change-password', [UserController::class, 'changePassword'])->name('change.password');
            Route::post('/change-image', [UserController::class, 'changeImage'])->name('change.image');
        });

        Route::group(['prefix' => 'properties', 'as' => 'books.'], function () {
            Route::get('/', [BookController::class, 'books']);
            Route::post('/store', [BookController::class, 'store'])->name('store');
            Route::get('/show/{id}', [BookController::class, 'show'])->name('show');
            Route::post('/update', [BookController::class, 'update'])->name('update');
            Route::post('/destroy', [BookController::class, 'destroy'])->name('destroy');
        });


        Route::group(['prefix' => 'for-leases', 'as' => 'forleases.'], function () {
            Route::get('/', [ForLaseController::class, 'forlease']);
            Route::post('/store', [ForLaseController::class, 'store'])->name('store');
            // Route::get('/show/{id}', [BookController::class, 'show'])->name('show');
            // Route::post('/update', [BookController::class, 'update'])->name('update');
            // Route::post('/destroy', [BookController::class, 'destroy'])->name('destroy');
        });

    });

    Route::group(['as' => 'front.'], function () {
        Route::get('/', [HomeController::class, 'index'])->name('index');
        Route::get('/services', [HomeController::class, 'services'])->name('services');
        Route::get('/properties/details/{id}', [HomeController::class, 'propertiesDetails'])->name('properties.details');
        Route::get('/properties', [HomeController::class, 'properties'])->name('properties');
        Route::get('/books', [HomeController::class, 'books'])->name('books');
        Route::get('/about-us', [HomeController::class, 'about'])->name('about');
        Route::get('/contact-us', [HomeController::class, 'contact'])->name('contact');
        Route::get('/for-lease', [HomeController::class, 'forLease'])->name('forlease');
        Route::get('/for-lease/details/{id}', [HomeController::class, 'forLeaseDetails'])->name('forlease.details');
        Route::get('/tearms-of-use', [HomeController::class, 'tearmsOfUse'])->name('tearms');
        Route::get('/privacy-policy', [HomeController::class, 'policy'])->name('policy');
        Route::post('/contact-us/store', [HomeController::class, 'contactStore'])->name('contact.store');
        Route::post('/subscribe/store', [HomeController::class, 'subscribeStore'])->name('subscribe.store');
        Route::get('/book/{id}/show', [HomeController::class, 'showBook'])->name('book.show');
    }); 

});