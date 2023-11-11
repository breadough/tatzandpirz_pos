<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\RecordController;
use App\Http\Controllers\ArtistController;

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

// Route::get('/', function () {
//     return view('index');
// });

// Route::get('/', function () {
//     return view('index',);
// });

Route::get('/', [Controller::class, 'index']);


#records route
Route::get('/records', [RecordController::class, 'index']);
Route::get('/record/add', [RecordController::class, 'add']);
Route::post('/record/store', [RecordController::class, 'store']);
Route::get('/record/{id}', [RecordController::class, 'view']);

#artist route
Route::get('/artists', [ArtistController::class, 'index']);