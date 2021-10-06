<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\pagecontroller;

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
    return view('Home');
});

Route::get('/productaddpage', [pagecontroller::class, 'productaddpage'])->name('/productaddpage');
Route::post('/productadd', [pagecontroller::class, 'productadd'])->name('/productadd');
Route::get('/productedit/{id}', [pagecontroller::class, 'productedit'])->name('/productedit');
Route::get('/productdelete/{id}', [pagecontroller::class, 'productdelete'])->name('/productdelete');
Route::get('/productdetails', [pagecontroller::class, 'productdetails'])->name('/productdetails');
Route::post('/producteditSubmit', [pagecontroller::class, 'producteditSubmit'])->name('/producteditSubmit');

