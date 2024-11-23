<?php

// routes/web.php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PenulisController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PenerbitController;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\RegistrasiController;
use App\Http\Controllers\ReviewController;

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
    return view('auth.login');
});

Route::get('/profile', function () {
    return view('partial.profile');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/profiles', [ProfileController::class, 'index'])->name('profiles.index');
    Route::get('/profiles/create', [ProfileController::class, 'create'])->name('profiles.create');
    Route::post('/profiles', [ProfileController::class, 'store'])->name('profiles.store');
    Route::get('/profiles/show', [ProfileController::class, 'show'])->name('profiles.show');
    Route::get('/profiles/edit', [ProfileController::class, 'edit'])->name('profiles.edit');
    Route::post('/profiles/update', [ProfileController::class, 'update'])->name('profiles.update');
    Route::delete('/profiles/destroy', [ProfileController::class, 'destroy'])->name('profiles.destroy');
});

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::resource('penulis', PenulisController::class);
Route::resource('genre', GenreController::class);
Route::resource('penerbit', PenerbitController::class);
Route::resource('profiles', ProfileController::class);
Route::resource('buku', BukuController::class);
Route::resource('reviews', ReviewController::class);


// Registration Routes
Route::get('/register', [RegistrasiController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegistrasiController::class, 'register']);

// Login Routes
Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('login', [LoginController::class, 'login']);
Route::post('logout', [LoginController::class, 'logout'])->name('logout');
