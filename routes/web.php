<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VideoController;
use Inertia\Inertia;

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

Route::get('/', function () {return inertia()->render('Welcome');})->name('home');
Route::get('delete-video', function () {return inertia()->render('DeleteVideo');})->name('deleteVideo');
Route::get('videos/{id}',[VideoController::class,'show'])->name('videos.show');

require __DIR__.'/auth.php';
