<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TicketController;

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

Route::get('/',[TicketController::class,'show']);
Route::get('/base',function () {
    return view('layout.base');
});
Route::get('/new', function () {
    return view('new_ticket');
});
Route::get('/show', function () {
    return view('show_ticket');
});
Route::Post('/open',[TicketController::class,'open']);
Route::get('/show/{id}',[TicketController::class,'showInf']);
