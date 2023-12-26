<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use Illuminate\Support\Facades\Route;
use App\Models\Product;



// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [AuthenticatedSessionController::class, 'create'])
    ->name('log');

Route::get('/dashboard', function () {
    $products = Product::all();
    return view('dashboard', ['products' => $products]);
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Route::get('/dashboard', [ProductController::class, 'home'])->name('home');
Route::get('/create-product', [ProductController::class, 'create'])->name('create');
Route::post('/dashboard', [ProductController::class, 'store'])->name('store');
Route::get('/{product}/edit', [ProductController::class, 'edit'])->name('edit');
Route::put('/{product}/update', [ProductController::class, 'update'])->name('update');
Route::delete('/{product}/delete', [ProductController::class, 'delete'])->name('delete');

require __DIR__.'/auth.php';
