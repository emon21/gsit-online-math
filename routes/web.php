<?php

use App\Http\Controllers\admin\AboutUsController AS about;
use App\Http\Controllers\admin\BoardOfAdviser;
use App\Http\Controllers\admin\BoarOfDirctor;
use App\Http\Controllers\admin\OrganizController;
use App\Http\Controllers\admin\OurSlogan;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebsiteController;
use App\Models\About_us;
use Illuminate\Support\Facades\Artisan;

use App\Http\Controllers\Admin\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Admin\HomeController;

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

Route::get('/optimize', function () {
    Artisan::call('cache:clear');
    Artisan::call('config:cache');
    Artisan::call('view:clear');
    Artisan::call('optimize');
    Artisan::call('optimize:clear');
    return "Cleared!";
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// ============================ website ============================

Route::get('/',[WebsiteController::class,'index'])->name('index');
Route::get('/faq',[WebsiteController::class,'faq'])->name('faq');
Route::get('/search',[WebsiteController::class,'search'])->name('search');
Route::get('/result',[WebsiteController::class,'result'])->name('result');
Route::get('/about-us',[WebsiteController::class,'aboutUs'])->name('about-us');
Route::get('/target',[WebsiteController::class,'target'])->name('target');


// ============================ Admin Route ============================
// Route::get('about',[about::class,'index'])->name('about');


/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
*/

Route::get('/admin/login', [AuthenticatedSessionController::class, 'create'])->name('admin.login')->middleware('guest:admin');

Route::post('/admin/login/store', [AuthenticatedSessionController::class, 'store'])->name('admin.login.store');


Route::prefix('admin')->middleware(['admin'])->group(function() {

    Route::get('/', [HomeController::class, 'index'])->name('admin.dashboard');
    Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])->name('admin.logout');
    Route::get('about',[about::class,'index'])->name('admin.about');
    Route::post('about/update/{edit_id}',[about::class,'update'])->name('about.update');
    Route::get('/demo',[about::class,'demo'])->name('admin.demo');

    //our sologan
    Route::post('slogan/',[OurSlogan::class,'index'])->name('slogan.index');
    Route::post('slogan/update/{edit_id}',[OurSlogan::class,'update'])->name('slogan.update');



    // ================  Organize Route ================

    Route::controller(OrganizController::class)->group(function(){
        Route::get('organize', 'index')->name('organize.index');
        Route::get('organize/create', 'create')->name('organize.create');
        Route::post('organize', 'store')->name('organize.store');
        Route::get('organize/{organize}', 'show')->name('organize.show');
        Route::get('organize/edit/{organize}', 'edit')->name('organize.edit');
        Route::post('organize/{organize}', 'update')->name('organize.update');
        Route::delete('organize/{organize}', 'destroy')->name('organize.destroy');
    });

    // ================  BOARD OF DIRECTOR ================

    Route::resource('director', BoarOfDirctor::class);

     // ================  BOARD OF Adviser ================

     Route::get('/adviser',[BoardOfAdviser::class,'index'])->name('adviser.index');
     Route::get('/adviser/add',[BoardOfAdviser::class,'add'])->name('adviser.add');
     Route::post('/adviser/insert',[BoardOfAdviser::class,'insert'])->name('adviser.insert');
     Route::get('/adviser/edit/{edit_id}',[BoardOfAdviser::class,'edit'])->name('adviser.edit');
     Route::post('/adviser/update/{edit_id}',[BoardOfAdviser::class,'update'])->name('adviser.update');
     Route::delete('/adviser/delete/{delete}',[BoardOfAdviser::class,'delete'])->name('adviser.delete');


    // Route::controller(ProductController::class)->group(function(){
    //     Route::get('products', 'index')->name('products.index');
    //     Route::post('products', 'store')->name('products.store');
    //     Route::get('products/create', 'create')->name('products.create');
    //     Route::get('products/{product}', 'show')->name('products.show');
    //     Route::put('products/{product}', 'update')->name('products.update');
    //     Route::delete('products/{product}', 'destroy')->name('products.destroy');
    //     Route::get('products/{product}/edit', 'edit')->name('products.edit');
    // });

    // ================  BOARD OF DIRECTOR ================

});


//coll back function
Route::get('/home',function(){
    return view('home');
})->name('home');

require __DIR__.'/auth.php';
