<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\ProductsController;
use App\Http\Controllers\Frontend\FrontendController;
use App\Http\Controllers\Backend\UsersController;
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

// Frontend Home Page View
Route::get('/', [FrontendController::class, 'index'])->name('index');

//Single Product 
Route::get('/singleproduct/{id}', [FrontendController::class, 'singleproduct'])->name('singleproduct');

// For Product
Route::get('/product', [ProductsController::class, 'create'])->name('product');
Route::post('/addproduct', [ProductsController::class, 'store'])->name('addproduct');
Route::get('/showproducts', [ProductsController::class, 'show'])->name('showproducts');
Route::get('/delete/{id}', [ProductsController::class, 'destroy'])->name('delete');
Route::get('/edit/{id}', [ProductsController::class, 'edit'])->name('edit');
Route::post('/update/{id}', [ProductsController::class, 'update'])->name('update');


// For Users:
Route::get('/user', [UsersController::class, 'create'])->name('user');
Route::post('/adduser', [UsersController::class, 'store'])->name('adduser');
Route::get('/showusers', [UsersController::class, 'show'])->name('showusers');
Route::get('/deleteuser/{id}', [UsersController::class, 'delete'])->name('deleteuser');
Route::get('/edituser/{id}', [UsersController::class, 'edit'])->name('edituser');
Route::post('/updateuser/{id}', [UsersController::class, 'update'])->name('updateuser');


Route::get('/dashboard', function () {
    return view('backend.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
