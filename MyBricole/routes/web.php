<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BricoleController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\BricoleurController;
use App\Http\Controllers\CategorieController;
use App\Http\Controllers\CommentaireController;

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


    Route::get('/',[HomeController::class,'index']);


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware(['auth', 'AdminCheckAuth'])->group(function () {
    Route::get('admin/dashboard', [AdminController::class, 'index'])->name('admin/dashboard');
    //bricole
    Route::get('bricole',[BricoleController::class,'index']);
    Route::get('createbricole',[BricoleController::class,'create']);
    Route::get('updatebricole',[BricoleController::class,'edit']);
    Route::post('storebricole',[BricoleController::class,'store']);
    Route::get('/bricoles/{id}', [BricoleController::class, 'show'])->name('bricole.show');
    Route::post('/bricole/{id}', [BricoleController::class, 'update']);
    // category
    Route::get('categorie',[CategorieController::class,'index'])->name('categorie.index');
    Route::get('categorie/create',[CategorieController::class,'create'])->name('categorie/create');
    Route::post('/categorie/store',[CategorieController::class,'store']);
    Route::get('/categorie/{id}', [CategorieController::class, 'show'])->name('categorie.show');
    Route::get('/categorie/{id}/edit', [CategorieController::class, 'edit'])->name('categorie.edit');
    Route::put('/categorie/{id}', [CategorieController::class, 'update'])->name('categorie.update');
    Route::delete('/categorie/{id}', [CategorieController::class, 'destroy'])->name('categorie.destroy');
    //commentaires
    Route::get('commentairs',[CommentaireController::class,'index'])->name('commentairs'); 
    Route::get('commentairs/create',[CommentaireController::class,'create'])->name('commentairs/create'); 
    Route::post('commentairs/store',[CommentaireController::class,'store'])->name('commentairs/store');
    Route::get('commentairs/show/{id}',[CommentaireController::class,'show'])->name('commentairs.show');
});

Route::middleware(['auth', 'UserCheckAuth'])->group(function () {
    Route::get('user/dashboard', [UserController::class, 'index']);
});

Route::middleware(['auth', 'BricleurCheckAuth'])->group(function () {
    Route::get('bricoleur/dashboard', [BricoleurController::class, 'index']);
});

require __DIR__.'/auth.php';
