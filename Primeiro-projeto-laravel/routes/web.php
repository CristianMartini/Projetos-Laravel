<?php
use App\Http\Controllers\AboutController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\CategoryController;
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


Route::get('/about', [AboutController::class, 'index']);
/*Post controler */
Route::get('/posts',[PostController::class,'index'])->name('posts.index');
Route::get('/posts/create',[PostController::class,'create'])->name('posts.create');
Route::post('/posts',[PostController::class,'store'])->name('posts.store');
Route::get('/posts/{id}',[PostController::class,'show'])->name('posts.show');
Route::get('/posts/{id}/edit', [PostController::class, 'edit'])->name('posts.edit');
Route::put('/posts/{id}/edit', [PostController::class, 'update'])->name('posts.update');
Route::get('/posts/{id}/delete', [PostController::class, 'deleteConfirmation'])->name('posts.delete.confirmation');
Route::delete('/posts/{id}', [PostController::class, 'destroy'])->name('posts.destroy');


/*tag controler */
Route::get('/tags',[TagController::class, 'index'])->name('tags.index');
Route::get('/tags/create',[TagController::class, 'create'])->name('tags.create');
Route::post('/tags',[TagController::class, 'store'])->name('tags.store');
Route::get('/tags/{id}',[TagController::class, 'show'])->name('tags.show');
Route::get('/tags/{id}/edit', [TagController::class, 'edit'])->name('tags.edit');
Route::put('/tags/{id}', [TagController::class, 'update'])->name('tags.update');
Route::get('/tags/{id}/delete', [PostController::class, 'deleteConfirmation'])->name('tags.delete.confirmation');
Route::delete('/tags/{id}', [PostController::class, 'destroy'])->name('tags.destroy');



Route::resource('categories', CategoryController::class);