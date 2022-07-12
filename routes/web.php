<?php

use App\Http\Controllers\AppoinmentController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\GalleryController; 
use App\Http\Controllers\OurteamController; 
use App\Http\Controllers\EnquiryController; 
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\SubscribeController;  
use App\Http\Controllers\ServiceController; 
use App\Http\Controllers\BlogController; 
use App\Http\Controllers\LoginController;
use App\Http\Controllers\mainController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\SubscribeUsController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/',function(){
//     return view('frontend.index');
// });
Route::get('/',[FrontController::class,'home'])->name('home');

Route::get('/gallery',[FrontController::class,'gallery'])->name('gallery');
Route::get('/about',[FrontController::class,'about'])->name('about');
Route::get('/ourdoctors',[FrontController::class,'doctors'])->name('doctors');
Route::get('/blogs',[FrontController::class,'blogs'])->name('blogs');
Route::get('/blog/{id}',[FrontController::class,'blog'])->name('blog');

Route::get('/contact',[FrontController::class,'contact'])->name('contact');
Route::post('/contact-request',[ContactController::class,'store'])->name('contact_store');
Route::post('/subscribeus',[SubscribeUsController::class,'store'])->name('subscribe_store');

Route::get('/service',[FrontController::class,'service'])->name('service');
Route::get('/appointments',[AppoinmentController::class,'index'])->name('appointments');

Route::post('/appointment',[AppoinmentController::class,'store'])->name('app_store');


Route::get('/adminlogin',[LoginController::class,'page']);
Route::post('/adminlogin',[LoginController::class,'authentic']);
Route::post('/logout',[LoginController::class,'logout']);
Route::group(['middleware' => ['adminpage'], 'prefix' =>'/admin'],function(){
    Route::get('/dashboard',[mainController::class,'main'])->name('dash');
   
    Route::resource('gallery',GalleryController::class);
    Route::resource('ourteam',OurteamController::class);
    Route::resource('enquiries',EnquiryController::class);
    Route::resource('testimonial',FeedbackController::class);
    Route::resource('subscribe',SubscribeController::class);
    Route::resource('service',ServiceController::class);
    
    Route::get('/blogs',[BlogController::class,'index'])->name('blog.list');
    Route::get('/blogs-create',[BlogController::class,'create'])->name('blog.create');
    Route::post('/blog-store',[BlogController::class,'store'])->name('blog.store');
    Route::get('/blog-edit/{id}',[BlogController::class,'edit'])->name('blog.edit');
    Route::put('/blog-update/{id}',[BlogController::class,'update'])->name('blog.update');
    Route::delete('/blog-destroy/{id}',[BlogController::class,'destroy'])->name('blog.destroy');

});

