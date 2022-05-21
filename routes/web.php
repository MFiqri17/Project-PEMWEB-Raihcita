<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\BeasiswaControllers;

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

Route::get('/', [LoginController::class, 'index'])->name('sign-in');
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

Route::get('/beasiswa', [BeasiswaControllers::class, 'show']);
Route::get('/beasiswa/{id}', [BeasiswaControllers::class, 'detail'])->name('detailBeasiswa');





Route::get('/dashboard', [BeasiswaControllers::class, 'index']);

Route::delete('/dashboard/delete/{beasiswa}', [BeasiswaControllers::class, 'destroy'])->name('deleteBeasiswa');


Route::get('/dashboard/addBeasiswa', [BeasiswaControllers::class, 'adminForm'])->name('addBeasiswa');
Route::post('/dashboard/addBeasiswa', [BeasiswaControllers::class, 'store'])->name('StoreaddBeasiswa');

Route::get('/dashboard/updateBeasiswa/{id}', [BeasiswaControllers::class, 'edit'])->name('updateBeasiswa');
Route::post('/dashboard/updateBeasiswa/{id}', [BeasiswaControllers::class, 'update'])->name('StoreupdateBeasiswa');


