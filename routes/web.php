<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LeaguesController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LeaguePostsController;

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

Route::get('/', [HomeController::class, 'home'])->name('home');

Route::get('/create', [LeaguesController::class, 'create'])->name('leagues.create');

Route::get('/show/{league}', [LeaguesController::class, 'show'])->name('show');

Route::get('/show/{league}/createPost', [LeaguePostsController::class, 'create'])->name('leaguePosts.create');

Route::get('/show/{league}/posts', [LeaguePostsController::class, 'index'])->name('leaguePosts.index');

Route::get('/leagues/posts/{leaguePostID}', [LeaguePostsController::class, 'show'])->name('leaguePosts.show');

Route::get('/index', [LeaguesController::class, 'index'])->name('leagues.index');

Route::post('/store', [LeaguesController::class, 'store'])->name('leagues.store');

Route::post('/show/store', [LeaguePostsController::class, 'store'])->name('leaguePosts.store');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

