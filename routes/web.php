<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Games;
use App\Http\Controllers\Users;

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
    return view('index');
});

//Game
Route::post('/creategame',[Games::class, 'creategame']);
Route::post('/uploadgame',[Games::class, 'gameupload']);
Route::post('/deletegame',[Games::class, 'deletegame']);
Route::get('/searchgame',[Games::class, 'searchgames']);
Route::get('/newgame',[Games::class, 'creategameview']);
//User
Route::post('/register',[Users::class, 'register']);
Route::post('/login',[Users::class, 'login']);
Route::get('/userdetails',[Users::class, 'getuserdetails']);