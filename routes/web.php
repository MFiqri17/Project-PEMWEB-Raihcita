<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistrationController;

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
    return view('sign-in');
});

Route::get('/sign-in/admin', function () {
    return view('sign-inAdmin');
});

Route::get('/sign-up', [RegistrationController::class, 'index']);
Route::post('/sign-up', [RegistrationController::class, 'store']);

Route::get('/register2', [RegistrationController::class, 'index2']);

Route::post('/register2', [RegistrationController::class, 'store2']);

Route::get('/dashboard', function() {
    return view('dashbord');
});