<?php
use App\Http\Controllers\SimplonsBeauty;
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

// Route::get('/', function () {
//     return view('welcome');
// })->name('home');

// Route::get('/about', function () {
//     return view('about');
// })->name('about');

// Route::get('/gallery', function () {
//     return view('gallery');
// })->name('gallery');

// Route::get('/contact', function () {
//     return view('contact');
// })->name('contact');


Route::get('/',[SimplonsBeauty  ::class,'home'])->name('home');
Route::get('/a',[SimplonsBeauty  ::class,'about'])->name('about');
Route::get('/c',[SimplonsBeauty  ::class,'contact'])->name('contact');
Route::get('/g',[SimplonsBeauty  ::class,'gallery'])->name('gallery');