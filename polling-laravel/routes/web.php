<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PollingController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/index', function () {
    return view('index');
});

Route::get('/unauthorized', function () {
    return view('unauthorized');
});

Route::get('/dashboard', function () {
    return view('home');
})->middleware(['auth', 'verified'])->name('home');

Route::get('/polling', function () {
    return view('mahasiswa.polling');
})->middleware(['auth', 'verified'])->name('mahasiswa.polling');

Route::get('/course', function () {
    return view('course');
})->middleware(['auth', 'cekLevel:Program Studi'])->name('course');


Route::middleware(['auth', 'cekLevel:Program Studi'])->name('course');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::post('/storePolling', [PollingController::class, 'storePolling']);
});

require __DIR__ . '/auth.php';
