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

Route::get('/', [LoginController::class, 'index']);
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

Route::get('/dashboard', [BeasiswaControllers::class, 'index']);


Route::get('/
', [BeasiswaControllers::class, 'adminForm']);
Route::post('/adminForm', [BeasiswaControllers::class, 'store']);

Route::get('/adminForm/{id}', [BeasiswaControllers::class, 'edit']);