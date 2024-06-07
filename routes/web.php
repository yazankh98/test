<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

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

Route::get("/" , [PostController::class , 'index'])->name('posts.index');
Route::get("/post/create" , [PostController::class , 'create'])->name('posts.create');
Route::post("/post/store" , [PostController::class , 'store'])->name('posts.store');
Route::delete("/post/delete/{post}" , [PostController::class , 'destroy'])->name('post.delete');
Route::get("/post/edit/{post}" , [PostController::class , 'edit'])->name('post.edit');
Route::put("/post/update/{post}" , [PostController::class , 'update'])->name('post.update');
Route::get("/post/show/{post}" , [PostController::class , 'show'])->name('post.show');
