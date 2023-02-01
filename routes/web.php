<?php

use App\Http\Controllers\Admin\PostController as AdminPostController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\Posts\CommentController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\User\PostController as UserPostController;
use Illuminate\Routing\Route as RoutingRoute;
use Illuminate\Support\Facades\Route;


Route::view('/', 'home.index')->name('home');

Route::redirect('/home', '/')->name('home.redirect');

// Route::get('test', TestController::class)->name('test')->middleware('token');
Route::get('test', TestController::class)->name('test');

Route::middleware('guest')->group(function() {
	Route::get('register', [RegisterController::class, 'index'])->name('register');
	Route::post('register', [RegisterController::class, 'store'])->name('register.store');

	Route::get('login', [LoginController::class, 'index'])->name('login');
	Route::post('login', [LoginController::class, 'store'])->name('login.store');
	// Route::get('login/{user}/confirmation', [LoginController::class, 'confirmation'])->name('login.confirmation')->withoutMiddleware('guest');
	// Route::post('login/{user}/confirm', [LoginController::class, 'confirm'])->name('login.confirm');
});

//
Route::get('blog', [BlogController::class, 'index'])->name('blog');
Route::get('blog/{post}', [BlogController::class, 'show'])->name('blog.show');
Route::post('blog/{post}/like', [BlogController::class, 'like'])->name('blog.like');


//
// Route::prefix('user')->as('user.')->middleware('auth', 'active')->group(function()
Route::prefix('user')->as('user.')->group(function()
{
	// CRUD (create, read, update, delete)
	Route::redirect('/', '/user/posts')->name('user');

	Route::get('posts', [UserPostController::class, 'index'])->name('posts');
	// Route::get('posts/create', [PostController::class, 'create'])->name('posts.create');
	// Route::post('posts', [PostController::class, 'store'])->name('posts.store');
	// Route::get('posts/{post}', [PostController::class, 'show'])->name('posts.show');
	// Route::get('posts/{post}/edit', [PostController::class, 'edit'])->name('posts.edit');
	// Route::put('posts/{post}', [PostController::class, 'update'])->name('posts.update');
	Route::delete('posts/{post}', [UserPostController::class, 'delete'])->name('posts.delete');

	Route::resource('posts', UserPostController::class)->only(['create', 'store', 'show', 'edit', 'update',]);

	Route::put('posts/{post}/like', [UserPostController::class, 'like'])->name('posts.like');
			
});


//
Route::prefix('admin')->middleware('auth', 'active', 'admin')->group(function()
{
	// CRUD (create, read, update, delete)
	Route::redirect('/', '/admin/posts')->name('admin');

	Route::get('posts', [AdminPostController::class, 'index'])->name('admin.posts');
	Route::get('posts/create', [AdminPostController::class, 'create'])->name('admin.posts.create');
	Route::post('posts', [AdminPostController::class, 'store'])->name('admin.posts.store');
	Route::get('posts/{post}', [AdminPostController::class, 'show'])->name('admin.posts.show');
	Route::get('posts/{post}/edit', [AdminPostController::class, 'edit'])->name('admin.posts.edit');
	Route::put('posts/{post}', [AdminPostController::class, 'update'])->name('admin.posts.update');
	Route::delete('posts/{post}', [AdminPostController::class, 'delete'])->name('admin.posts.delete');
	Route::put('posts/{post}/like', [AdminPostController::class, 'like'])->name('admin.posts.like');
			
});

Route::resource('posts/{post}/comments', CommentController::class)->only(['index', 'show', 'edit']);

// Route::fallback(function()
// {
//     return 'fallback';
// }); //если ни один другой маршрут не подошел, должен всегда распологаться в самом низу
