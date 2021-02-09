<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HouController;

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

Route::view('about', 'about');
Route::view('contact', 'contact');

//Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//    return view('dashboard');
//})->name('dashboard');

//auth route for all type of user
Route::group(['middleware' => ['auth:sanctum', 'verified']], function() {
    Route::get('/dashboard', 'App\Http\Controllers\DashboardController@index') ->name('dashboard');
    Route::get('/allHour', 'App\Http\Controllers\HouController@index')->name('hou');
    Route::get('/addNewPerson', 'App\Http\Controllers\RegController@index')->name('reg');
    Route::post('/addNewPerson', 'App\Http\Controllers\RegController@store');
    Route::get('/hours-detail/{id}', '\App\Http\Controllers\HouController@show')->name('det');
    Route::get('/addNewHour','App\Http\Controllers\HouController@create')->name('add');
    Route::post('/daycreate', 'App\Http\Controllers\HouController@store');
    Route::get('/hours-update/{id}', [HouController::class, 'edit']);
    Route::post('/day-updated', [HouController::class, 'update'])->name('day.update');
    Route::get('/hours-delete/{id}', [HouController::class, 'destroy']);


});



