<?php

use App\Http\Controllers\admin\AboutUsController AS about;
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
Route::get('/about-us',[WebsiteController::class,'about'])->name('about-us');
Route::get('/target',[WebsiteController::class,'target'])->name('target');


// ============================ Admin Route ============================
Route::get('about',[about::class,'index'])->name('about');



/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
*/

Route::get('/admin/login', [AuthenticatedSessionController::class, 'create'])->name('admin.login')->middleware('guest:admin');

Route::post('/admin/login/store', [AuthenticatedSessionController::class, 'store'])->name('admin.login.store');

Route::group(['middleware' => 'admin'], function() {

    Route::get('/admin', [HomeController::class, 'index'])->name('admin.dashboard');

    Route::post('/admin/logout', [AuthenticatedSessionController::class, 'destroy'])->name('admin.logout');

});


//coll back function
Route::get('/home',function(){
    return view('home');
})->name('home');

require __DIR__.'/auth.php';
