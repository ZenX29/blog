<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
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

Route::get('/home', function () {
    return view('pages.home');
});
Route::get('/about', function () {
    return view('pages.about');
});
Route::get('/contact', function () {
    return view('pages.contact');
});
// Route::get('/blog', function () {
//     return view('pages.blog');
// });
Route::get('/blogs',[BlogController::class,'index']);
Route::get('/blog/{id}',[BlogController::class,'show']);
Route::get('blogs/create',[BlogController::class,'create']);
Route::post('blog/create',[BlogController::class,'store']);
Route::get('blog/edit/{id}',[BlogController::class,'edit']);
Route::post('/blog/edit/{id}',[BlogController::class,'update']);
Route::get('/blog/delete/{id}',[BlogController::class,'destroy']);
Route::middleware(['auth:sanctum', 'verified'])->get('/home', function () {
    return view('pages.home');
});
