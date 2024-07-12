<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MovieController;

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

Route::get('/', [MovieController::class, 'index'])->name('movies.index');

Route::get('/registration', [moviecontroller::class, 'showForm'])->name('movies.registration');

Route::post('/', [moviecontroller::class, 'store'])->name('movies.store');

Route::get('/signin', [moviecontroller::class, 'signin'])->name('movies.signin');

Route::get('/dashboard' , [moviecontroller::class, 'dashboard'])->name('movies.dashboard');

Route::get('/dashboard/add_movie', [moviecontroller::class, 'add_movie'])->name('movies.add_movie');

Route::get('/dashboard/delete_movie', [moviecontroller::class, 'delete_movie'])->name('movies.delete_movie');

Route::get('/dashboard/announcement', [moviecontroller::class, 'announcement'])->name('movies.announcement');

Route::get('/recommandation', [moviecontroller::class, 'recommandation'])->name('movies.recommandation');

Route::post('/authenticate', [moviecontroller::class, 'authenticate'])->name('movies.authenticate');

Route::get('/logout', [moviecontroller::class, 'logout'])->name('movies.logout');

Route::get('/ticket_siege/payment', [moviecontroller::class, 'payment'])->name('movies.payment');

Route::post('/ticket_siege/payment', [moviecontroller::class, 'reserveTicket'])->name('movies.reserve_ticket');

Route::get('/ticket_siege/{id}', [moviecontroller::class, 'ticket_siege'])->name('movies.ticket_siege');

Route::get('/fetshMovies/{id}', [MovieController::class, 'fetshMovies'])->name('movies.fetshMovies');
