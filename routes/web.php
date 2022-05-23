<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\BeasiswaControllers;
use App\Http\Controllers\LombaController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\ProfileController;

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

Route::get('/', [LoginController::class, 'index'])->name('sign-in')->middleware('guest');
// Route::post('/', [LoginController::class, 'authenticate'])->name('login');


Route::get('/sign-in/admin', function () {
    return view('sign-inAdmin');
});

Route::get('/sign-up', [RegistrationController::class, 'index']);
Route::post('/sign-up', [RegistrationController::class, 'store']);

Route::get('/register2', [RegistrationController::class, 'index2']);

Route::post('/register2', [RegistrationController::class, 'store2']);


Route::get('/homepage', function(){
    return view('homepage');
})->name('homepage');



// Beasiswa List
Route::get('/beasiswa', [BeasiswaControllers::class, 'show']);
Route::get('/beasiswa/{id}', [BeasiswaControllers::class, 'detail'])->name('detailBeasiswa');

// Lomba List
Route::get('/lomba', [LombaController::class, 'show']);
Route::get('/lomba/{id}', [LombaController::class, 'detail'])->name('detailLomba');


Route::get('/profile/{user}', [ProfileController::class, 'index'])->name('profile');
Route::post('/profile/{user}', [ProfileController::class, 'update'])->name('updateProfile');


Route::middleware(['auth', 'isAdmin'])->group(function () {

    // Dashboard Lomba
    Route::get('/dashboard/lomba', [LombaController::class, 'index']);
    Route::delete('/dashboard/delete/{lomba}', [LombaController::class, 'destroy'])->name('deleteLomba');
    Route::get('/dashboard/addLomba', [LombaController::class, 'adminForm'])->name('addLomba');
    Route::post('/dashboard/addLomba', [LombaController::class, 'store'])->name('StoreaddLomba');
    Route::get('/dashboard/updateLomba/{id}', [LombaController::class, 'edit'])->name('updateLomba');
    Route::post('/dashboard/updateLomba/{id}', [LombaController::class, 'update'])->name('StoreupdateLomba');

    // Dashboard Beasiswa 
    Route::get('/dashboard/beasiswa', [BeasiswaControllers::class, 'index']);
    Route::delete('/dashboard/beasiswa/delete/{beasiswa}', [BeasiswaControllers::class, 'destroy'])->name('deleteBeasiswa');
    Route::get('/dashboard/beasiswa/addBeasiswa', [BeasiswaControllers::class, 'adminForm'])->name('addBeasiswa');
    Route::post('/dashboard/beasiswa/addBeasiswa', [BeasiswaControllers::class, 'store'])->name('StoreaddBeasiswa');
    Route::get('/dashboard/beasiswa/updateBeasiswa/{id}', [BeasiswaControllers::class, 'edit'])->name('updateBeasiswa');
    Route::post('/dashboard/beasiswa/updateBeasiswa/{id}', [BeasiswaControllers::class, 'update'])->name('StoreupdateBeasiswa');

});



