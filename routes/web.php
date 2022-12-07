<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LaptopController;

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

Route::get('/laptopoke',[LaptopController::class, 'index'])->name('laptopoke');

Route::get('/tambahlaptop',[LaptopController::class, 'tambahlaptop'])->name('tambahlaptop');
Route::post('/insertdata',[LaptopController::class, 'insertdata'])->name('insertdata');

Route::get('/tampilkandata/{id}',[LaptopController::class, 'tampilkandata'])->name('tampilkandata');
Route::post('/updatedata/{id}',[LaptopController::class, 'updatedata'])->name('updatedata');

Route::get('/delete/{id}',[LaptopController::class, 'delete'])->name('delete'); 