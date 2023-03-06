<?php

use App\Http\Controllers\ProfileController;
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
    return view('main');
});

Route::get('/menu',function(){
    return view('menu');
});

Route::get('/dash-menu',function(){
    return view('dashmenu');
});

Route::get('empresa/register', function(){
    return view("empresa/auth/register");
});
 
Route::get('/carta', function () {
    return view('carta');
})->middleware(['auth', 'verified'])->name('carta');

Route::get('/perfil', function () {
    return view('profile.edit');
})->middleware(['auth', 'verified'])->name('profile.edit');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
