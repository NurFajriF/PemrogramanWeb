<?php

use App\Models\User;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\DashboardReservationController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DashboardUsersController;
use App\Http\Controllers\DashboardAdminsController;
use App\Http\Controllers\DashboardRoomsController;

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

Route::get('/', function(){
    return view('home', [
        'title'=> 'Home',
    ]);
});

Route::get('/accomodation', function(){
    return view('accomodation', [
        'title' => 'Accomodation',
    ]);
});

Route::get('/blog', function(){
    return view('blog', [
        'title' => 'Blog'
    ]);
});

Route::get('/blog-single', function(){
    return view('blog-single', [
        'title' => 'Blog- single'
    ]);
});

Route::get('/gallery', function(){
    return view('gallery', [
        'title' => 'Gallery',
    ]);
});

Route::get('/contact', function(){
    return view('contact', [
        'title' => 'Contact',
    ]);
});

Route::get('/about', function(){
    return view('about', [
        'title' => 'About',
    ]);
});

Route::get('/reservation', [ReservationController::class, 'create']);
Route::post('/reservation', [ReservationController::class, 'store']);

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'auth']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'create'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');


Route::get('/admin', function(){
    return view('admin/login', [
        'title' => 'Login Admin',
        'admin' =>'',
    ]);
});

Route::get('/admin/dashboard', function(){
    return view('admin.dashboard',[
        'title'=>'Dashboard',
    ]);
})->middleware('auth');

Route::resource('/admin/reservation', DashboardReservationController::class)->middleware('auth');

Route::resource('/admin/users', DashboardUsersController::class)->middleware('auth');

Route::resource('/admin/admins', DashboardAdminsController::class)->middleware('auth');

Route::resource('/admin/rooms', DashboardRoomsController::class)->middleware('auth');

ROute::get('/admin/payment', function(){
    return view('admin.payment',[
        'title'=>'Payment'
    ]);
});

Route::get('/admin/chart', function(){
    return view('admin.chart', [
        'title'=>'Chart',
    ]);
})->middleware('auth');

