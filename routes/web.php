<?php

use App\Http\Controllers\CreateControllers;
use App\Http\Controllers\dashboardController;
use App\Http\Controllers\EditControllers;
use App\Http\Controllers\loginController;
use App\Models\Siswa;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\registerController;
use App\Http\Controllers\SiswaControllers;
use App\Http\Controllers\ViewControllers;
use App\Models\Edit;
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

//  Route::get('/', function () {
//      return view('kerangka.master');
//  });

Route::get('/', [dashboardController::class,'landingpage']);

Route::get('/dashboard', [dashboardController::class,'index']);

Route::get('/login',[loginController::class, 'index'])->name('login');
Route::post('/log',[loginController::class, 'login'])->name('login.store');


Route::get('/register',[registerController::class, 'index'])->name('register');
Route::post('/regist', [registerController::class, 'store'])->name('register.store');


Route::get('/siswa', [SiswaControllers::class, 'dataSiswa'])->name('siswa.data');
Route::get('/view', [ViewControllers::class, 'datasiswa'])->name('data.siswa');
Route::get('/create-siswa', [CreateControllers::class, 'inputSiswa'])->name('create.siswa');
Route::post('/post-siswa', [SiswaControllers::class, 'storeSiswa'])->name('siswa.store');
Route::get('/edit/{id}', [EditControllers::class, 'editSiswa'])->name('edit.siswa');
Route::post('/update-siswa', [EditControllers::class, 'updateSiswa'])->name('update.siswa');
Route::get('delete/{id}', [EditControllers::class, 'deleteSiswa'])->name('siswa.delete');

Route::get('/log-out', [registerController::class, 'logout'])->name('siswa.logout');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
