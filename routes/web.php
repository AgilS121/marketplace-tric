<?php

use App\Models\categories;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\RegisterPenjualController;
use App\Http\Controllers\AdminCategoryController;
use App\Http\Controllers\KonfigurasiController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\AdminProduct;
use App\Http\Controllers\ProfilPenjualController;
use App\Http\Controllers\CarouselController;

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

Route::controller(CategoriesController::class)->group(function(){
    Route::get('dashboard/categories','index' );
    Route::get('dashboard/categories/create','create');
    Route::post('dashboard/categories/store','store');
});

//Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/dashboard', function () {
    return view('dashboard.home',[
        "title" => "Home",
        "activee" => "home"
    ]);
});

Route::get('/adminproduct', [AdminProduct::class,'index']);
Route::get('/adminproduct/ambilbarang', [AdminProduct::class,'ambilbarang']);
Route::get('/adminproduct/getProductById/{id}', [AdminProduct::class,'getProductById']);
Route::post('/adminproduct/updateProduct', [AdminProduct::class,'updateProduct']);
Route::post('/adminproduct/store', [AdminProduct::class,'store']);
Route::delete('adminproduct/delete/{id}', [AdminProduct::class, 'deleteProduct']);

Route::get('/', [PostController::class,'index']);
Route::get('/home', [PostController::class,'index']);
// halaman single post
Route::get('posts/{post:slug}', [PostController::class, 'show']);

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/getcategory', [AdminCategoryController::class, 'getcategories']);

Route::get('/konfigurasiumum', [KonfigurasiController::class, 'index']);
Route::get('/konfigurasiicon', [KonfigurasiController::class, 'indexicon']);
Route::get('/konfigurasilogo', [KonfigurasiController::class, 'indexlogo']);
Route::get('/ambildata', [KonfigurasiController::class,'ambildata']);
Route::get('/ambildatabyid', [KonfigurasiController::class,'getPenjualById']);
Route::post('/updatePenjual', [KonfigurasiController::class,'updatePenjual']);


Route::get('/carousel', [CarouselController::class, 'index']);

Route::get('/test', [ProfilPenjualController::class, 'index']);

Route::get('/regispenjual', [RegisterPenjualController::class, 'index']);
Route::post('/regispenjual', [RegisterPenjualController::class, 'store']);

//Login Controller
Route::controller(LoginController::class)->group(function(){
    Route::get('/login', 'index')->name('login')->middleware('guest');
    Route::Post('/login', 'authenticate');

    Route::Post('/logout', 'logout');
});

Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'store']);
// Route::get('/login', [LoginController::class, 'index'])
// ->name('login')->middleware('guest');
// Route::Post('/login', [LoginController::class, 'authenticate']);

// Route::Post('/logout', [LoginController::class, 'logout']);

// Route::resource('/dashboard/categories', AdminCategoryController::class)->except('show')
// ->middleware('admin');

// Route dashboard orfram
Route::get('/orfarm', function () {
    return view('dashboardOrfarm.layouts.app',[
        "title" => "orfarm",
        "activee" => "orfarm"
    ]);
});

// Route dashboard shopus
Route::get('/shopus', function () {
    return view('dashboardShopus.layouts.app',[
        "title" => "shopus",
        "activee" => "shopus"
    ]);
});

// Route dashboard furea

Route::get('/', function () {
    return view('dashboardFurea.layouts.app',[
        "title" => "fureaaa",
        "activee" => "furea"
    ]);
});
Route::get('/', [BarangController::class,'index']);

// Route dashboard nest
Route::get('/nest', function () {
    return view('dashboardNest.layouts.app',[
        "title" => "nest",
        "activee" => "nest"
    ]);
});

// Route Furea
// Route dashboard nest
Route::get('/shopfurea', function () {
    return view('dashboardFurea.posts.index',[]);
});
Route::get('/product', function () {
    return view('dashboardFurea.posts.show',[]);
});
Route::get('/blog', function () {
    return view('dashboardFurea.posts.blog',[]);
});
Route::get('/about', function () {
    return view('dashboardFurea.posts.about',[]);
});
Route::get('/contact', function () {
    return view('dashboardFurea.posts.contact',[]);
});
Route::get('/loginb', function () {
    return view('dashboardFurea.auth.login',[]);
});
Route::get('/myaccount', function () {
    return view('dashboardFurea.posts.account',[]);
});
Route::get('/wishlist', function () {
    return view('dashboardFurea.posts.wishlist',[]);
});
Route::get('/address', function () {
    return view('dashboardFurea.posts.address',[]);
});