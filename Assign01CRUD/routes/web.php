<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Student\StudentController;

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

Route::controller(App\Http\Controllers\Student\StudentController::class)->group(function () {
    #view
    Route::get('/students', 'index');//view
    Route::get('/students/{student_id}/details','details');

    #create
    Route::get('/students/create', 'create');
    Route::post('/students', 'store');

    #update
    Route::get('/students/{student}/edit', 'edit');
    Route::patch('/students/{student}','update');

    #delete
    Route::get('/students/{student}','destory');
    
    
});
