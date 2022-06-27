<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\RatingController;
use App\Http\Controllers\ViewController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\VoteController;
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

Route::get('/', function () {
    return view('index');
});
Route::get('/rate', function () {
    header("location: ../rate/information");
    exit();
});

Route::get('/rate/{name}', [VoteController::class, 'main']);

Route::get('/', [HomeController::class, 'main']);
Route::get('/rating', [RatingController::class, 'main']);
Route::get('/{type}', [ViewController::class, 'main']);
Route::get('/menu', [MenuController::class, 'main']);
// Route::get('/{name}', function ($name) {
//     return view($name);
// });
// Route::get('/test', [HomeController::class, 'main']);