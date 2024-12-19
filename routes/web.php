<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Session;



//for admin panel
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductAdminController;


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

Route::get('/login', function () {
    return view('login');
    
})->name('login');

Route::get('/logout', function () {
    if (session()->has('admin')) {
        session()->forget('admin');
    }
    if (session()->has('user')) {
        session()->forget('user');
    }
    return redirect()->route('login');
})->name('logout');





 Route::view('/register','register');
Route::post("/login",[UserController::class,'login'])->name('login.action');
Route::post("/register",[UserController::class,'register'])->name('register');
Route::get("/",[ProductController::class,'index'])->name('homepage');
Route::get("detail/{id}",[ProductController::class,'detail']);
Route::get("cat_detail/{name}",[ProductController::class,'cat_detail'])->name('categotyproduct');
Route::get("search",[ProductController::class,'search']);
Route::post("add_to_cart",[ProductController::class,'addToCart']);
Route::get("cartlist",[ProductController::class,'cartList']); 
Route::get("removecart/{id}",[ProductController::class,'removeCart']); 
Route::get("ordernow",[ProductController::class,'orderNow']); 
Route::post("orderplace",[ProductController::class,'orderPlace']);
Route::get("myorders",[ProductController::class,'myOrders']);
Route::post('/prescription',[ProductController::class,'prescriptionStore']);
 
Route::get('/dashboard',[AdminController::class,'home']);


//categories route for admin panel

Route::controller(CategoryController::class)->prefix('category')->group(function () {
    Route::get('', 'index')->name('category');
    Route::get('add', 'add')->name('category.add');
    Route::post('save', 'save')->name('category.save');
    Route::get('edit/{id}', 'edit')->name('category.edit');
    Route::post('edit/{id}', 'update')->name('category.update');
    Route::get('delete/{id}', 'delete')->name('category.delete');
});

//product route for admin pannel
Route::controller(ProductAdminController::class)->prefix('products')->group(function () {
    Route::get('', 'index')->name('products');
    Route::get('add', 'add')->name('products.add');
    Route::post('add', 'save')->name('products.save');
    Route::get('edit/{id}', 'edit')->name('products.edit');
    Route::post('edit/{id}', 'update')->name('products.update');
    Route::get('delete/{id}', 'delete')->name('products.delete');
});

Route::controller(AdminController::class)->prefix('order')->group(function(){
    Route::get('','index')->name('order');
    Route::get('confirm/{id}/{name}', 'confirm')->name('order.confirm');
    Route::get('delete/{id}/{name}', 'delete')->name('order.delete');
});


Route::controller(AdminController::class)->prefix('prescription')->group(function(){
    Route::get('','pre_index')->name('pre_order');
    Route::get('confirm/{id}', 'pre_confirm')->name('pre_order.confirm');
    Route::get('delete/{id}', 'pre_delete')->name('pre_order.delete');
});

Route::controller(AdminController::class)->prefix('userinfo')->group(function(){
    Route::get('','user_info')->name('userinfo');
    Route::get('delete/{id}', 'deleteuser')->name('user.delete');
});








