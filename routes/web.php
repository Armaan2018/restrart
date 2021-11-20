<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/admin/login',[App\Http\Controllers\AdminController::class,'showAdminLogin'])->name('admin-login');


Route::get('/admin/register',[App\Http\Controllers\AdminController::class,'showAdminRegister'])->name('admin-register');




Route::post('admin/login',[App\Http\Controllers\Auth\LoginController::class,'login'])->name('admin.login');

Route::post('admin/register',[App\Http\Controllers\Auth\RegisterController::class,'register'])->name('admin.register');

Route::post('admin/logout',[App\Http\Controllers\Auth\LoginController::class,'logout'])->name('admin.logout');

//middlewere function
Route::group(['middleware' => 'auth'],function(){

Route::get('dashboard',[App\Http\Controllers\AdminController::class,'showAdminDashboard'])->name('admin-dashboard');
	
	//Category

Route::get('category',[App\Http\Controllers\CategoryController::class,'index'])->name('category');


Route::post('category-insert',[App\Http\Controllers\CategoryController::class,'insertCategory'])->name('category.create');

Route::get('category-show',[App\Http\Controllers\CategoryController::class,'showCategory'])->name('category.show');
Route::get('category-delete/{id}',[App\Http\Controllers\CategoryController::class,'deleteCategory'])->name('category.delete');


Route::get('category-edit/{id}',[App\Http\Controllers\CategoryController::class,'editCategory'])->name('category.edit');

Route::post('category-update',[App\Http\Controllers\CategoryController::class,'updateCategory'])->name('category.update');

Route::get('category-status-active/{id}',[App\Http\Controllers\CategoryController::class,'statusActive'])->name('status.active');

Route::get('category-status-inactive/{id}',[App\Http\Controllers\CategoryController::class,'statusInActive'])->name('status.inactive');


//Tag


Route::get('tag',[App\Http\Controllers\TagController::class,'index'])->name('tag');


Route::post('tag-create',[App\Http\Controllers\TagController::class,'tagCreate'])->name('tag.create');


Route::get('tag-show',[App\Http\Controllers\TagController::class,'tagShow'])->name('tag.show');

Route::get('tag-delete/{id}',[App\Http\Controllers\TagController::class,'tagDelete'])->name('tag.delete');

Route::get('tag-edit/{id}',[App\Http\Controllers\TagController::class,'tagEdit'])->name('tag.edit');


Route::post('tag-update',[App\Http\Controllers\TagController::class,'tagUpdate'])->name('tag.update');


Route::get('tag-status-active/{id}',[App\Http\Controllers\TagController::class,'tagActive'])->name('tag.active');
Route::get('tag-status-inactive/{id}',[App\Http\Controllers\TagController::class,'tagInActive'])->name('tag.inactive');



//post

Route::get('post',[App\Http\Controllers\PostController::class,'index'])->name('post');


Route::post('post-create',[App\Http\Controllers\PostController::class,'postCreate'])->name('post.create');



Route::get('post-show',[App\Http\Controllers\PostController::class,'postShow'])->name('post.show');


Route::get('post-edit/{id}',[App\Http\Controllers\PostController::class,'postEdit'])->name('post.edit');

Route::get('format-type',[App\Http\Controllers\PostController::class,'formatType'])->name('format.type');



Route::get('trash-show',[App\Http\Controllers\PostController::class,'allTrash'])->name('trash.show');





Route::get('post-trash',[App\Http\Controllers\PostController::class,'postTrash'])->name('post.trash');


Route::get('post-trashmove/{id}',[App\Http\Controllers\PostController::class,'postTrashMove'])->name('post.movetrash');


Route::get('post-restore/{id}',[App\Http\Controllers\PostController::class,'postRestore'])->name('post.restore');


Route::get('post-delete/{id}',[App\Http\Controllers\PostController::class,'postDelete'])->name('post.delete');


Route::get('post-count',[App\Http\Controllers\PostController::class,'postCount'])->name('post.count');
Route::get('trash-count',[App\Http\Controllers\PostController::class,'trashCount'])->name('trash.count');
});




	//Blog Started
Route::get('problog',[App\Http\Controllers\BlogController::class,'index'])->name('blog');

//blog Category Search
Route::get('problog/category/{slug}',[App\Http\Controllers\BlogController::class,'blogCatSearch'])->name('blog.cat.search');
Route::get('problog/tag/{slug}',[App\Http\Controllers\BlogController::class,'blogTagSearch'])->name('blog.tag.search');

Route::get('problog/{slug}',[App\Http\Controllers\BlogController::class,'blogSingle'])->name('blog.single');


Route::post('problog',[App\Http\Controllers\BlogController::class,'searchPost'])->name('blog.search.sidebar');



//test slider


Route::get('vie/slide',[App\Http\Controllers\VieController::class,'sliderController'])->name('vie.slider');