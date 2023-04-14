<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BricoleController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\BricoleurController;
use App\Http\Controllers\CategorieController;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware(['auth', 'AdminCheckAuth'])->group(function () {
    Route::get('admin/dashboard', [AdminController::class, 'index']);
    //bricole
    Route::get('bricole',[BricoleController::class,'index']);
    Route::get('createbricole',[BricoleController::class,'create']);
    Route::get('updatebricole',[BricoleController::class,'edit']);
    Route::post('storebricole',[BricoleController::class,'store']);
    Route::get('/bricoles/{id}', [BricoleController::class, 'edit']);
    Route::post('/bricole/{id}', [BricoleController::class, 'update']);
    // category
    Route::get('categorie',[CategorieController::class,'index']);
});

Route::middleware(['auth', 'UserCheckAuth'])->group(function () {
    Route::get('user/dashboard', [UserController::class, 'index']);
});

Route::middleware(['auth', 'BricleurCheckAuth'])->group(function () {
    Route::get('bricoleur/dashboard', [BricoleurController::class, 'index']);
});

require __DIR__.'/auth.php';
