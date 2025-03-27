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

Route::get('/', function () { //call back function 
    return view('welcome');
}) ;
// simple blog:
Route::get('/posts', [PostController::class,'index'])->name(name: 'posts.index');

Route::get('/posts/create',[PostController::class, 'create'])->name(name:'posts.create');

Route::post('/posts', [PostController::class, 'store'])->name(name: 'posts.store');

Route::get('/posts/{post}',[PostController::class, 'show'])->name(name: 'posts.show');

Route::get('/posts/{post}/edit', [PostController::class, 'edit'])->name(name: 'posts.edit');

Route::put('/posts/{post}', [PostController::class, 'update'])->name(name: 'posts.update');

Route::delete('/posts/{post}', [PostController::class, 'destroy'])->name(name:'posts.destroy');
//1- define a new route so the user can access it through browser
//2- define controller that render a view 
//3- define view that contains list of posts
//4- remove any static html from the view