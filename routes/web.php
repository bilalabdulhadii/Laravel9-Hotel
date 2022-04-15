<?php

use App\Http\Controllers\TestControl;
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
// 1- Print on route
Route::get('/hello', function () {
    return 'Hello World';
});

// 2- Call view in route
Route::get('/', function () {
    return view('welcome');
});

// 3- Call controller function
Route::get('/', [TestControl::class,'index'])->name('home');

// 4- Route-> Controller-> View
Route::get('/func', [TestControl::class,'func'])->name('func');

// 5- Route with parameters
Route::get('/parameter/{id}/{number}', [TestControl::class,'parameter'])->name('parameter');

// 6- Route with post
Route::post('/save', [TestControl::class,'save'])->name('save');


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
