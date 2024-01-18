<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\IndustryController;
use App\Http\Controllers\DynamicPageController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PartnerController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\CasestudyController;
use App\Http\Controllers\CareerController;
use App\Http\Controllers\ContentController;

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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('basic-settings', [SettingController::class, 'index'])->name('basic.index');
Route::post('basic-setting', [SettingController::class, 'store'])->name('basic.store');
Route::get('basic-settings/create', [SettingController::class, 'create'])->name('basic.create');
Route::get('basic-settings/{basic-settings}', [SettingController::class, 'show'])->name('basic.show');
Route::post('basic-settings', [SettingController::class, 'update'])->name('basic.update');
Route::delete('basic-settings/{basic-settings}', [SettingController::class, 'destroy'])->name('basic.destroy');

Route::resources([
    'service'=> ServiceController::class,
    'product'=> ProductController::class,
    'industry'=> IndustryController::class,
    'page'=> DynamicPageController::class,
    'team'=> TeamController::class,
    'career'=> CareerController::class,
    'contact'=> ContactController::class,
    'partner'=> PartnerController::class,
    'slider'=> SliderController::class,
    'blog'=> BlogController::class,
    'casestudy'=> CasestudyController::class,
    ]);


Route::get('our/team', [TeamController::class, 'list'])->name('team.list');
Route::get('our/career', [CareerController::class, 'index'])->name('career.index');


 Route::get('latest/blog', [SiteController::class, 'blogsfront'])->name('website.blogs');
 Route::get('latest/blog/details', [SiteController::class, 'blogsdetails'])->name('website.blog_details');
 Route::get('services', [SiteController::class, 'services'])->name('website.services');
 Route::get('index', [SiteController::class, 'mainindex'])->name('website.index');
 Route::get('about', [SiteController::class, 'about'])->name('website.about');
 Route::get('latest/product', [SiteController::class, 'product'])->name('website.product');
 Route::get('latest/contact', [SiteController::class, 'contact'])->name('website.contact');
 Route::get('latest/caseStudy', [SiteController::class, 'casestudy'])->name('website.casestudy');
 Route::get('latest/career', [SiteController::class, 'career'])->name('website.career');
 Route::get('latest/career/show/{id}', [SiteController::class, 'show'])->name('website.show');


 
Route::get('content', [ContentController::class, 'index'])->name('content.index');
Route::post('content', [ContentController::class, 'store'])->name('content.store');
Route::get('content/create', [ContentController::class, 'create'])->name('content.create');
Route::get('content/{content}', [ContentController::class, 'show'])->name('content.show');
Route::post('content', [ContentController::class, 'update'])->name('content.update'); 
Route::delete('content/{content}', [ContentController::class, 'destroy'])->name('content.destroy');
