<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\AppointmentController;
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
    return view('home');
});

Route::get('/services', [ServiceController::class, 'index'])->name('services');
Route::get('/services/{slug}', [ServiceController::class, 'service_individual'])->name('services_individual');



Route::get('/contact', [AppointmentController::class, 'showAppointmentForm'])->name('appointment.form');
Route::post('/contact', [AppointmentController::class, 'submitAppointmentForm'])->name('appointment.submit');
Route::get('/contact/success', [AppointmentController::class, 'showSuccessPage'])->name('appointment.success');
