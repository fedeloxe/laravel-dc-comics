<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ComicController as ComicController;

use App\Http\Controllers\PagesController as PagesController;

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

// Route::get('/', function () {
//     $comics = config('db.comics');
//     return view('comics', compact('comics'));
// });

// Route::get('/home', [ComicController::class, 'getComics']);

Route::get('/', [PagesController::class, 'getHome'])->name('homepage');

Route::get('/home', [ComicController::class, 'index'])->name('home');



Route::get('/single-comic/{id}', function ($id) {
    $comics = config('db.comics');
    $single = '';
    foreach ($comics as $key => $comic) {
        if ($id == $key) {
            $single = $comic;
        }
    }

    return view('single-comic', compact('comics', 'single'));
})->name('single-comic');
