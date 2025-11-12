<?php

use App\Admin\Controllers\MessagesContactController;
use App\Http\Controllers\GeneralController;
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

Route::get('/', [GeneralController::class, 'logistiques']);

Route::Post('/souscription', [GeneralController::class, 'news'])->name('news.submit');
Route::get('/about', function () {
    return view('about');
});
// Route::get('/agence', function () {
//     return view('agence');
// });
Route::get('/agence', [GeneralController::class, 'agences']);

Route::get('/blog-details', function () {
    return view('blog-details');
});
Route::get('/blog', function () {
    return view('blog');
});
Route::get('/cart', function () {
    return view('cart');
});
Route::get('/checkout', function () {
    return view('checkout');
});
Route::get('/contact', function () {
    return view('contact');
});
// Route::get('/contact', [MessagesContactController::class, 'stre'])->name('contact');
Route::Post('/contact', [GeneralController::class, 'stre'])->name('contact.submit');
Route::get('/achat_location_vehicule', [GeneralController::class, 'vehicule'])->name('vente.vehicule');
Route::get('/achat_piece', [GeneralController::class, 'piece'])->name('vente.piece');


Route::get('/error', function () {
    return view('error');
});
Route::get('/index', function () {
    return view('index');
});
Route::get('/home-car-dealer', function () {
    return view('home-car-dealer');
});
Route::get('/home-logistic', function () {
    return view('home-logistic');
});
Route::get('/home-repair', function () {
    return view('index');
});
Route::get('/project-details', function () {
    return view('project-details');
});
Route::get('/service-details', function () {
    return view('service-details');
});

Route::get('/service', [GeneralController::class, 'services']);

Route::get('/shop-details', function () {
    return view('shop-details');
});
Route::get('/shop', function () {
    return view('shop');
});
Route::get('/team-details', function () {
    return view('team-details');
});
Route::get('/team', function () {
    return view('team');
});
Route::get('/testimonial', function () {
    return view('testimonial');
});
Route::get('/wishlist', function () {
    return view('wishlist');
});
