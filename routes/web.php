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
})->name('home');

Route::get('/services', [ServiceController::class, 'index'])->name('services');
Route::get('/services/{slug}', [ServiceController::class, 'service_individual'])->name('services_individual');



Route::get('/contact', [AppointmentController::class, 'showAppointmentForm'])->name('appointment.form');
Route::post('/contact', [AppointmentController::class, 'submitAppointmentForm'])->name('appointment.submit');
Route::get('/contact/success', [AppointmentController::class, 'showSuccessPage'])->name('appointment.success');
Route::post('/contact/submit', [AppointmentController::class, 'submitAppointmentForm'])->name('appointment.submit');


Route::get('/team', function () {
    $title = 'Our Team';
    return view('team', ['title' => $title]);
})->name('team');

Route::get('/testimonials', function () {
    $title = 'Testimonials';
    return view('testimonials', ['title' => $title]);
})->name('testimonials');

Route::get('/faq', function () {
    $title = 'FAQ';
    return view('faq', ['title' => $title]);
})->name('faq');

Route::get('/blog', function () {
    $title = 'Blog';
    return view('blog', ['title' => $title]);
})->name('blog');


Route::get('/products', function () {
    $title = 'Products';
    return view('products', ['title' => $title]);
})->name('products');

Route::get('/cart', function () {
    $title = 'Cart';
    return view('cart', ['title' => $title]);
})->name('cart');

Route::get('/checkout', function () {
    $title = 'Checkout';
    return view('checkout', ['title' => $title]);
})->name('checkout');
