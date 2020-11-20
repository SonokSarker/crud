<?php

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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Route::get('/crud_create', [App\Http\Controllers\CrudController::class, 'create'])
// Route::post('/crud_submit', [App\Http\Controllers\CrudController::class, 'store'])
// Route::get('/crud_show', [App\Http\Controllers\CrudController::class, 'show'])
// Route::post('crud_submit','CrudController@store');
// Route::get('crud_create','CrudController@create');
// Route::get('crud_create','CrudController@crud_create');
// Route::get('crud_show','CrudController@show');
Route::get('crud_show', [App\Http\Controllers\CrudController::class, 'show'])->name('crud_show');
Route::get('crud_create', [App\Http\Controllers\CrudController::class, 'create'])->name('crud_create');
Route::post('crud_submit', [App\Http\Controllers\CrudController::class, 'store'])->name('crud_submit');
Route::get('crud_delete/{id}', [App\Http\Controllers\CrudController::class, 'destroy'])->name('crud_delete');
Route::get('crud_edit/{id}', [App\Http\Controllers\CrudController::class, 'edit'])->name('crud_edit');
Route::post('crud_update/{id}', [App\Http\Controllers\CrudController::class, 'update'])->name('crud.update');



